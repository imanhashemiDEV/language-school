<?php
// app/Models/Room.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'capacity',
        'floor',
        'has_projector',
        'has_whiteboard',
        'has_audio_system',
        'has_ac',
        'description',
        'is_active',
    ];

    protected $casts = [
        'has_projector' => 'boolean',
        'has_whiteboard' => 'boolean',
        'has_audio_system' => 'boolean',
        'has_ac' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function classRooms()
    {
        return $this->hasMany(ClassRoom::class);
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeWithCapacity($query, $minCapacity)
    {
        return $query->where('capacity', '>=', $minCapacity);
    }
}