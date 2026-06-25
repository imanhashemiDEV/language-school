<?php
// app/Models/ExamResult.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'exam_id',
        'enrollment_id',
        'score',
        'listening_score',
        'reading_score',
        'writing_score',
        'speaking_score',
        'grammar_score',
        'vocabulary_score',
        'is_passed',
        'status',
        'teacher_feedback',
        'notes',
    ];

    protected $casts = [
        'score' => 'decimal:2',
        'listening_score' => 'decimal:2',
        'reading_score' => 'decimal:2',
        'writing_score' => 'decimal:2',
        'speaking_score' => 'decimal:2',
        'grammar_score' => 'decimal:2',
        'vocabulary_score' => 'decimal:2',
        'is_passed' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($result) {
            if ($result->score !== null && $result->exam) {
                $result->is_passed = $result->score >= $result->exam->passing_score;
            }
        });
    }

    // Relationships
    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    // Accessors
    public function getGradeAttribute(): ?string
    {
        if ($this->score === null) {
            return null;
        }

        return match (true) {
            $this->score >= 90 => 'A',
            $this->score >= 80 => 'B',
            $this->score >= 70 => 'C',
            $this->score >= 60 => 'D',
            default => 'F',
        };
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'در انتظار نمره',
            'graded' => 'نمره‌گذاری شده',
            'absent' => 'غایب',
            'cheating' => 'تقلب',
            default => $this->status,
        };
    }
}