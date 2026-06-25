<?php
// app/Models/Book.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'isbn',
        'edition',
        'publication_year',
        'level_id',
        'type',
        'price',
        'stock',
        'image',
        'description',
        'is_active',
    ];

    protected $casts = [
        'price' => 'decimal:0',
        'is_active' => 'boolean',
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'book_course')
            ->withPivot('is_required');
    }

    public function getTypeNameAttribute(): string
    {
        return match ($this->type) {
            'student_book' => 'کتاب دانش‌آموز',
            'workbook' => 'کتاب تمرین',
            'teacher_book' => 'کتاب معلم',
            'audio_cd' => 'سی‌دی صوتی',
            'flashcard' => 'فلش کارت',
            'supplementary' => 'کمک آموزشی',
            default => $this->type,
        };
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeInStock($query)
    {
        return $query->where('stock', '>', 0);
    }
}