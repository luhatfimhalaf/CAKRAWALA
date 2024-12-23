<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $table = 'profile';

    protected $fillable = [
        'profile_id',
        'user_id',
        'first_name',
        'last_name',
        'bio',
        'image_path',
    ];
}
