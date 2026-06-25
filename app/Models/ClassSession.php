<?php
// app/Models/ClassSession.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'class_room_id',
        'session_number',
        'date',
        'start_time',
        'end_time',
        'title',
        'topics_covered',
        'homework',
        'notes',
        'status',
        'cancellation_reason',
        'postponed_to',
        'is_makeup_session',
    ];

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'postponed_to' => 'date',
        'is_makeup_session' => 'boolean',
    ];

    // Relationships
    public function classRoom()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }

    // Accessors
    public function getDurationMinutesAttribute(): int
    {
        return \Carbon\Carbon::parse($this->start_time)
            ->diffInMinutes(\Carbon\Carbon::parse($this->end_time));
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'scheduled' => 'برنامه‌ریزی شده',
            'held' => 'برگزار شده',
            'cancelled' => 'لغو شده',
            'postponed' => 'به تعویق افتاده',
            default => $this->status,
        };
    }

    public function getAttendanceStatsAttribute(): array
    {
        $attendances = $this->attendances;
        
        return [
            'total' => $attendances->count(),
            'present' => $attendances->where('status', 'present')->count(),
            'absent' => $attendances->where('status', 'absent')->count(),
            'late' => $attendances->where('status', 'late')->count(),
            'excused' => $attendances->where('status', 'excused')->count(),
        ];
    }

    // Scopes
    public function scopeScheduled($query)
    {
        return $query->where('status', 'scheduled');
    }

    public function scopeHeld($query)
    {
        return $query->where('status', 'held');
    }

    public function scopeToday($query)
    {
        return $query->whereDate('date', today());
    }

    public function scopeUpcoming($query)
    {
        return $query->where('date', '>=', today())
                     ->where('status', 'scheduled');
    }

    public function scopeThisWeek($query)
    {
        return $query->whereBetween('date', [
            now()->startOfWeek(),
            now()->endOfWeek()
        ]);
    }
}