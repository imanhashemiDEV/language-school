<?php
// app/Models/Enrollment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'student_id',
        'class_room_id',
        'enrollment_date',
        'original_price',
        'discount_amount',
        'discount_reason',
        'final_price',
        'paid_amount',
        'payment_status',
        'status',
        'final_score',
        'notes',
        'registered_by',
    ];

    protected $casts = [
        'enrollment_date' => 'date',
        'original_price' => 'decimal:0',
        'discount_amount' => 'decimal:0',
        'final_price' => 'decimal:0',
        'paid_amount' => 'decimal:0',
        'final_score' => 'decimal:2',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($enrollment) {
            if (empty($enrollment->enrollment_date)) {
                $enrollment->enrollment_date = now();
            }
        });
    }

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function registeredBy()
    {
        return $this->belongsTo(User::class, 'registered_by');
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    public function examResults()
    {
        return $this->hasMany(ExamResult::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }

    // Accessors
    public function getRemainingAmountAttribute(): float
    {
        return $this->final_price - $this->paid_amount;
    }

    public function getAttendancePercentAttribute(): float
    {
        $total = $this->classRoom->sessions()
            ->whereIn('status', ['held', 'scheduled'])
            ->count();
        
        $present = $this->attendances()
            ->whereIn('status', ['present', 'late'])
            ->count();

        return $total > 0 ? round(($present / $total) * 100, 1) : 0;
    }

    public function getAverageScoreAttribute(): ?float
    {
        $results = $this->examResults()->whereNotNull('score')->get();
        
        if ($results->isEmpty()) {
            return null;
        }

        return round($results->avg('score'), 2);
    }

    public function getPaymentStatusNameAttribute(): string
    {
        return match ($this->payment_status) {
            'pending' => 'در انتظار پرداخت',
            'partial' => 'پرداخت جزئی',
            'paid' => 'پرداخت کامل',
            'refunded' => 'بازپرداخت شده',
            default => $this->payment_status,
        };
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'active' => 'فعال',
            'completed' => 'تکمیل شده',
            'dropped' => 'انصراف',
            'transferred' => 'انتقالی',
            'failed' => 'مردود',
            default => $this->status,
        };
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('status', 'active');
    }

    public function scopeWithDebt($query)
    {
        return $query->whereRaw('final_price > paid_amount');
    }

    public function scopePaid($query)
    {
        return $query->where('payment_status', 'paid');
    }

    // Methods
    public function updatePaymentStatus(): void
    {
        $remaining = $this->remaining_amount;

        if ($remaining <= 0) {
            $this->payment_status = 'paid';
        } elseif ($this->paid_amount > 0) {
            $this->payment_status = 'partial';
        } else {
            $this->payment_status = 'pending';
        }

        $this->save();
    }

    public function canGetCertificate(): bool
    {
        return $this->status === 'completed' 
            && $this->payment_status === 'paid'
            && $this->attendance_percent >= 75
            && ($this->final_score === null || $this->final_score >= 60);
    }
}