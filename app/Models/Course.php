<?php
// app/Models/Course.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'code',
        'type',
        'level_id',
        'description',
        'objectives',
        'prerequisites',
        'duration_hours',
        'sessions_count',
        'price',
        'discount_percent',
        'image',
        'capacity',
        'is_online',
        'is_active',
        'is_featured',
    ];

    protected $casts = [
        'price' => 'decimal:0',
        'discount_percent' => 'decimal:2',
        'is_online' => 'boolean',
        'is_active' => 'boolean',
        'is_featured' => 'boolean',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($course) {
            if (empty($course->slug)) {
                $course->slug = Str::slug($course->name);
            }
            if (empty($course->code)) {
                $course->code = self::generateCourseCode($course->type);
            }
        });
    }

    public static function generateCourseCode($type): string
    {
        $prefix = strtoupper(substr($type, 0, 3));
        $lastCourse = self::where('type', $type)
            ->orderBy('id', 'desc')
            ->first();

        $sequence = $lastCourse ? (int) substr($lastCourse->code, -3) + 1 : 1;

        return "{$prefix}-" . str_pad($sequence, 3, '0', STR_PAD_LEFT);
    }

    // Relationships
    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'course_teacher');
    }

    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }

    public function books()
    {
        return $this->belongsToMany(Book::class, 'book_course')
            ->withPivot('is_required');
    }

    public function requiredBooks()
    {
        return $this->books()->wherePivot('is_required', true);
    }

    // Accessors
    public function getFinalPriceAttribute(): float
    {
        if ($this->discount_percent > 0) {
            return $this->price * (1 - $this->discount_percent / 100);
        }
        return $this->price;
    }

    public function getDiscountAmountAttribute(): float
    {
        return $this->price - $this->final_price;
    }

    public function getTypeNameAttribute(): string
    {
        return match ($this->type) {
            'general' => 'زبان عمومی',
            'ielts' => 'آیلتس',
            'toefl' => 'تافل',
            'conversation' => 'مکالمه',
            'business' => 'انگلیسی تجاری',
            'kids' => 'کودکان',
            'grammar' => 'گرامر',
            'speaking' => 'اسپیکینگ',
            'writing' => 'رایتینگ',
            'reading' => 'ریدینگ',
            'listening' => 'لیسنینگ',
            default => $this->type,
        };
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function scopeOfType($query, $type)
    {
        return $query->where('type', $type);
    }

    public function scopeOnline($query)
    {
        return $query->where('is_online', true);
    }
}