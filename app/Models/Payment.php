<?php
// app/Models/Payment.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'transaction_id',
        'student_id',
        'enrollment_id',
        'amount',
        'type',
        'method',
        'status',
        'reference_number',
        'bank_name',
        'card_number',
        'receipt_image',
        'description',
        'payment_date',
        'due_date',
        'received_by',
    ];

    protected $casts = [
        'amount' => 'decimal:0',
        'payment_date' => 'date',
        'due_date' => 'date',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($payment) {
            if (empty($payment->transaction_id)) {
                $payment->transaction_id = self::generateTransactionId();
            }
            if (empty($payment->payment_date)) {
                $payment->payment_date = now();
            }
        });

        static::saved(function ($payment) {
            if ($payment->enrollment && $payment->status === 'completed') {
                $payment->enrollment->paid_amount = $payment->enrollment
                    ->payments()
                    ->where('status', 'completed')
                    ->sum('amount');
                $payment->enrollment->updatePaymentStatus();
            }
        });
    }

    public static function generateTransactionId(): string
    {
        return 'TXN-' . now()->format('Ymd') . '-' . strtoupper(Str::random(8));
    }

    // Relationships
    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function receivedBy()
    {
        return $this->belongsTo(User::class, 'received_by');
    }

    // Accessors
    public function getTypeNameAttribute(): string
    {
        return match ($this->type) {
            'tuition' => 'شهریه',
            'book' => 'کتاب',
            'exam' => 'آزمون',
            'registration' => 'ثبت‌نام',
            'certificate' => 'گواهینامه',
            'penalty' => 'جریمه',
            'other' => 'سایر',
            default => $this->type,
        };
    }

    public function getMethodNameAttribute(): string
    {
        return match ($this->method) {
            'cash' => 'نقدی',
            'card' => 'کارت',
            'transfer' => 'انتقال بانکی',
            'online' => 'درگاه آنلاین',
            'cheque' => 'چک',
            'installment' => 'قسطی',
            'wallet' => 'کیف پول',
            default => $this->method,
        };
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'در انتظار',
            'completed' => 'تکمیل شده',
            'failed' => 'ناموفق',
            'refunded' => 'بازپرداخت',
            'cancelled' => 'لغو شده',
            default => $this->status,
        };
    }

    // Scopes
    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }

    public function scopeToday($query)
    {
        return $query->whereDate('payment_date', today());
    }

    public function scopeThisMonth($query)
    {
        return $query->whereMonth('payment_date', now()->month)
                     ->whereYear('payment_date', now()->year);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }
}