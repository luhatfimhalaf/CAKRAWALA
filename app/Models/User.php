<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, HasFactory;

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

    /**
     * Relationship: User has many posts.
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'user_id', 'id');
    }

    /**
     * Relationship: User has many comments.
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'user_id', 'id');
    }

    /**
     * Relationship: User has many likes.
     */
    public function likes(): HasMany
    {
        return $this->hasMany(Like::class, 'user_id', 'id');
    }
}
