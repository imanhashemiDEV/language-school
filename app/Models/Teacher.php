<?php
// app/Models/Teacher.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Teacher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'employee_code',
        'education_level',
        'field_of_study',
        'university',
        'certificates',
        'specializations',
        'bio',
        'experience_years',
        'hourly_rate',
        'monthly_salary',
        'employment_type',
        'hire_date',
        'contract_end_date',
        'bank_account',
        'bank_name',
        'available_days',
        'is_active',
    ];

    protected $casts = [
        'certificates' => 'array',
        'specializations' => 'array',
        'available_days' => 'array',
        'hire_date' => 'date',
        'contract_end_date' => 'date',
        'hourly_rate' => 'decimal:0',
        'monthly_salary' => 'decimal:0',
        'is_active' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($teacher) {
            if (empty($teacher->employee_code)) {
                $teacher->employee_code = self::generateEmployeeCode();
            }
        });
    }

    public static function generateEmployeeCode(): string
    {
        $year = now()->format('Y');
        $lastTeacher = self::whereYear('created_at', now()->year)
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastTeacher ? (int) substr($lastTeacher->employee_code, -3) + 1 : 1;

        return "TCH-{$year}-" . str_pad($sequence, 3, '0', STR_PAD_LEFT);
    }

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'level_teacher');
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'course_teacher');
    }

    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }

    public function activeClasses()
    {
        return $this->hasMany(ClassRoom::class)
            ->whereIn('status', ['confirmed', 'in_progress']);
    }

    public function payrolls()
    {
        return $this->hasMany(TeacherPayroll::class);
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return $this->user->full_name;
    }

    public function getCurrentMonthHoursAttribute(): int
    {
        return $this->classRooms()
            ->whereHas('sessions', function ($q) {
                $q->whereMonth('date', now()->month)
                  ->whereYear('date', now()->year)
                  ->where('status', 'held');
            })
            ->withCount(['sessions as hours' => function ($q) {
                $q->whereMonth('date', now()->month)
                  ->whereYear('date', now()->year)
                  ->where('status', 'held');
            }])
            ->get()
            ->sum(function ($class) {
                $duration = \Carbon\Carbon::parse($class->end_time)
                    ->diffInMinutes(\Carbon\Carbon::parse($class->start_time));
                return ($class->hours * $duration) / 60;
            });
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeAvailableOn($query, $day)
    {
        return $query->whereJsonContains('available_days', $day);
    }

    public function scopeCanTeach($query, $courseId)
    {
        return $query->whereHas('courses', function ($q) use ($courseId) {
            $q->where('courses.id', $courseId);
        });
    }
}