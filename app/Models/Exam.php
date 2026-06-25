<?php
// app/Models/Exam.php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable('title','class_room_id','type','date','start_time',
    'duration_minutes','total_score','passing_score','description',
    'topics','is_online','status',)]
class Exam extends Model
{

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime:H:i',
        'total_score' => 'decimal:2',
        'passing_score' => 'decimal:2',
        'is_online' => 'boolean',
    ];

    // Relationships
    public function classRoom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function results():HasMany
    {
        return $this->hasMany(ExamResult::class);
    }

    // Accessors
    public function getTypeNameAttribute(): string
    {
        return match ($this->type) {
            'quiz' => 'کوئیز',
            'midterm' => 'میان‌ترم',
            'final' => 'پایان‌ترم',
            'placement' => 'تعیین سطح',
            'mock' => 'آزمون آزمایشی',
            'speaking' => 'اسپیکینگ',
            'writing' => 'رایتینگ',
            default => $this->type,
        };
    }

    public function getAverageScoreAttribute(): ?float
    {
        return $this->results()
            ->where('status', 'graded')
            ->avg('score');
    }

    public function getPassRateAttribute(): float
    {
        $total = $this->results()->where('status', 'graded')->count();
        $passed = $this->results()->where('is_passed', true)->count();

        return $total > 0 ? round(($passed / $total) * 100, 1) : 0;
    }

    // Scopes
    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', today())
                     ->where('status', 'scheduled');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'completed');
    }
}
