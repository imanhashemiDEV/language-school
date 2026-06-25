<?php
// app/Models/Student.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'student_code',
        'current_level_id',
        'registration_date',
        'parent_name',
        'parent_mobile',
        'parent_relation',
        'emergency_contact',
        'emergency_phone',
        'medical_conditions',
        'notes',
        'source',
        'wallet_balance',
        'is_active',
    ];

    protected $casts = [
        'registration_date' => 'date',
        'wallet_balance' => 'decimal:0',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($student) {
            if (empty($student->student_code)) {
                $student->student_code = self::generateStudentCode();
            }
            if (empty($student->registration_date)) {
                $student->registration_date = now();
            }
        });
    }

    public static function generateStudentCode(): string
    {
        $year = now()->format('Y');
        $lastStudent = self::whereYear('created_at', now()->year)
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastStudent ? (int) substr($lastStudent->student_code, -4) + 1 : 1;

        return "STD-{$year}-" . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function currentLevel()
    {
        return $this->belongsTo(Level::class, 'current_level_id');
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function activeEnrollments()
    {
        return $this->hasMany(Enrollment::class)->where('status', 'active');
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function placementTests()
    {
        return $this->hasMany(PlacementTest::class);
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return $this->user->full_name;
    }

    public function getTotalPaidAttribute(): float
    {
        return $this->payments()
            ->where('status', 'completed')
            ->sum('amount');
    }

    public function getTotalDebtAttribute(): float
    {
        return $this->enrollments()
            ->sum(\DB::raw('final_price - paid_amount'));
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWithDebt($query)
    {
        return $query->whereHas('enrollments', function ($q) {
            $q->whereRaw('final_price > paid_amount');
        });
    }
}