<?php
// app/Models/User.php

namespace App\Models;

use Illuminate\Console\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

#[Fillable(['name', 'email', 'password','mobile','national_code',
    'gender', 'birth_date', 'address', 'is_active','is_admin','avatar'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    use HasFactory, Notifiable, SoftDeletes ,HasRoles;


    protected $casts = [
        'email_verified_at' => 'datetime',
        'mobile_verified_at' => 'datetime',
        'password' => 'hashed',
        'birth_date' => 'date',
        'is_active' => 'boolean',
        'is_admin' => 'boolean',
    ];

    // Relationships
//    public function student()
//    {
//        return $this->hasOne(Student::class);
//    }
//
//    public function teacher()
//    {
//        return $this->hasOne(Teacher::class);
//    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Methods
}
