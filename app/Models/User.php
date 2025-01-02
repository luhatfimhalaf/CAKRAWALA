<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'password',
        'profile_picture',
        'address',
        'work_experience',
        'last_education',
        'expertise',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}