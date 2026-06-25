<?php
// app/Models/Level.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'title',
        'description',
        'order',
        'color',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relationships
    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'current_level_id');
    }

    public function teachers()
    {
        return $this->belongsToMany(Teacher::class, 'level_teacher');
    }

    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }

    public function books()
    {
        return $this->hasMany(Book::class);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }

    // Accessors
    public function getFullNameAttribute(): string
    {
        return "{$this->name} - {$this->title}";
    }
}