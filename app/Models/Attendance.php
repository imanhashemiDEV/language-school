<?php
// app/Models/Attendance.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $fillable = [
        'enrollment_id',
        'class_session_id',
        'status',
        'arrival_time',
        'leave_time',
        'late_minutes',
        'notes',
        'marked_by',
    ];

    protected $casts = [
        'arrival_time' => 'datetime:H:i',
        'leave_time' => 'datetime:H:i',
    ];

    // Relationships
    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function classSession()
    {
        return $this->belongsTo(ClassSession::class);
    }

    public function markedBy()
    {
        return $this->belongsTo(User::class, 'marked_by');
    }

    // Accessors
    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'present' => 'حاضر',
            'absent' => 'غایب',
            'late' => 'تاخیر',
            'excused' => 'غیبت موجه',
            'early_leave' => 'ترک زودهنگام',
            default => $this->status,
        };
    }

    public function getStatusColorAttribute(): string
    {
        return match ($this->status) {
            'present' => 'green',
            'absent' => 'red',
            'late' => 'yellow',
            'excused' => 'blue',
            'early_leave' => 'orange',
            default => 'gray',
        };
    }

    // Scopes
    public function scopePresent($query)
    {
        return $query->whereIn('status', ['present', 'late']);
    }

    public function scopeAbsent($query)
    {
        return $query->whereIn('status', ['absent', 'excused']);
    }
}