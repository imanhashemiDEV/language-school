<?php
// app/Models/Certificate.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Certificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'certificate_number',
        'enrollment_id',
        'student_id',
        'type',
        'issue_date',
        'expiry_date',
        'final_score',
        'grade',
        'level_achieved',
        'file_path',
        'qr_code',
        'is_printed',
        'printed_at',
        'issued_by',
    ];

    protected $casts = [
        'issue_date' => 'date',
        'expiry_date' => 'date',
        'printed_at' => 'date',
        'final_score' => 'decimal:2',
        'is_printed' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($certificate) {
            if (empty($certificate->certificate_number)) {
                $certificate->certificate_number = self::generateCertificateNumber();
            }
            if (empty($certificate->issue_date)) {
                $certificate->issue_date = now();
            }
            if (empty($certificate->qr_code)) {
                $certificate->qr_code = Str::uuid();
            }
        });
    }

    public static function generateCertificateNumber(): string
    {
        $year = now()->format('Y');
        $month = now()->format('m');
        $lastCert = self::whereYear('created_at', now()->year)
            ->whereMonth('created_at', now()->month)
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastCert 
            ? (int) substr($lastCert->certificate_number, -4) + 1 
            : 1;

        return "CERT-{$year}{$month}-" . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    // Relationships
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function issuedBy()
    {
        return $this->belongsTo(User::class, 'issued_by');
    }

    // Accessors
    public function getTypeNameAttribute(): string
    {
        return match ($this->type) {
            'completion' => 'گواهی پایان دوره',
            'attendance' => 'گواهی حضور',
            'achievement' => 'گواهی موفقیت',
            'level' => 'گواهی سطح',
            default => $this->type,
        };
    }

    public function getVerificationUrlAttribute(): string
    {
        return route('certificates.verify', $this->qr_code);
    }

    public function getIsExpiredAttribute(): bool
    {
        return $this->expiry_date && $this->expiry_date->isPast();
    }
}