<?php
// app/Models/ClassRoom.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class ClassRoom extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'course_id',
        'term_id',
        'teacher_id',
        'room_id',
        'level_id',
        'start_date',
        'end_date',
        'start_time',
        'end_time',
        'days_of_week',
        'capacity',
        'min_capacity',
        'price',
        'status',
        'is_online',
        'online_link',
        'online_platform',
        'description',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'days_of_week' => 'array',
        'price' => 'decimal:0',
        'is_online' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($class) {
            if (empty($class->code)) {
                $class->code = self::generateClassCode();
            }
        });

        static::created(function ($class) {
            $class->generateSessions();
        });
    }

    public static function generateClassCode(): string
    {
        $year = now()->format('Y');
        $lastClass = self::whereYear('created_at', now()->year)
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastClass ? (int) substr($lastClass->code, -4) + 1 : 1;

        return "CLS-{$year}-" . str_pad($sequence, 4, '0', STR_PAD_LEFT);
    }

    public function generateSessions(): void
    {
        $startDate = Carbon::parse($this->start_date);
        $endDate = Carbon::parse($this->end_date);
        $sessionNumber = 1;

        $dayMapping = [
            'saturday' => Carbon::SATURDAY,
            'sunday' => Carbon::SUNDAY,
            'monday' => Carbon::MONDAY,
            'tuesday' => Carbon::TUESDAY,
            'wednesday' => Carbon::WEDNESDAY,
            'thursday' => Carbon::THURSDAY,
            'friday' => Carbon::FRIDAY,
        ];

        $classDays = collect($this->days_of_week)
            ->map(fn($day) => $dayMapping[strtolower($day)] ?? null)
            ->filter()
            ->toArray();

        $current = $startDate->copy();

        while ($current->lte($endDate) && $sessionNumber <= $this->course->sessions_count) {
            if (in_array($current->dayOfWeek, $classDays)) {
                // بررسی تعطیلات
                $isHoliday = Holiday::where('date', $current->toDateString())
                    ->orWhere(function ($q) use ($current) {
                        $q->where('date', '<=', $current->toDateString())
                          ->where('end_date', '>=', $current->toDateString());
                    })
                    ->exists();

                if (!$isHoliday) {
                    ClassSession::create([
                        'class_room_id' => $this->id,
                        'session_number' => $sessionNumber,
                        'date' => $current->toDateString(),
                        'start_time' => $this->start_time,
                        'end_time' => $this->end_time,
                        'status' => 'scheduled',
                    ]);
                    $sessionNumber++;
                }
            }
            $current->addDay();
        }
    }

    // Relationships
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function term()
    {
        return $this->belongsTo(Term::class);
    }

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }

    public function room()
    {
        return $this->belongsTo(Room::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function sessions()
    {
        return $this->hasMany(ClassSession::class);
    }

    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    public function activeEnrollments()
    {
        return $this->enrollments()->where('status', 'active');
    }

    public function students()
    {
        return $this->hasManyThrough(
            Student::class,
            Enrollment::class,
            'class_room_id',
            'id',
            'id',
            'student_id'
        );
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }

    // Accessors
    public function getEnrolledCountAttribute(): int
    {
        return $this->activeEnrollments()->count();
    }

    public function getAvailableCapacityAttribute(): int
    {
        return $this->capacity - $this->enrolled_count;
    }

    public function getIsFullAttribute(): bool
    {
        return $this->available_capacity <= 0;
    }

    public function getProgressPercentAttribute(): float
    {
        $total = $this->sessions()->count();
        $held = $this->sessions()->where('status', 'held')->count();

        return $total > 0 ? round(($held / $total) * 100, 1) : 0;
    }

    public function getDaysOfWeekPersianAttribute(): array
    {
        $mapping = [
            'saturday' => 'شنبه',
            'sunday' => 'یکشنبه',
            'monday' => 'دوشنبه',
            'tuesday' => 'سه‌شنبه',
            'wednesday' => 'چهارشنبه',
            'thursday' => 'پنجشنبه',
            'friday' => 'جمعه',
        ];

        return collect($this->days_of_week)
            ->map(fn($day) => $mapping[strtolower($day)] ?? $day)
            ->toArray();
    }

    public function getScheduleAttribute(): string
    {
        $days = implode(' - ', $this->days_of_week_persian);
        $time = Carbon::parse($this->start_time)->format('H:i') . 
                ' تا ' . 
                Carbon::parse($this->end_time)->format('H:i');
        
        return "{$days} ({$time})";
    }

    public function getStatusNameAttribute(): string
    {
        return match ($this->status) {
            'pending' => 'در انتظار تایید',
            'confirmed' => 'تایید شده',
            'in_progress' => 'در حال برگزاری',
            'completed' => 'تکمیل شده',
            'cancelled' => 'لغو شده',
            default => $this->status,
        };
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->whereIn('status', ['confirmed', 'in_progress']);
    }

    public function scopeUpcoming($query)
    {
        return $query->where('start_date', '>', now());
    }

    public function scopeOngoing($query)
    {
        return $query->where('start_date', '<=', now())
                     ->where('end_date', '>=', now());
    }

    public function scopeForTerm($query, $termId)
    {
        return $query->where('term_id', $termId);
    }

    public function scopeAvailable($query)
    {
        return $query->active()
                     ->whereRaw('capacity > (SELECT COUNT(*) FROM enrollments WHERE enrollments.class_room_id = class_rooms.id AND enrollments.status = "active")');
    }
}