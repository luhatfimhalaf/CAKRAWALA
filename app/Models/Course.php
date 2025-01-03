<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'id', 'image', 'title', 'category', 'lessons', 'duration', 
        'students', 'instructor', 'description', 'price','video_url',
    ];

    public $incrementing = false; // Karena menggunakan UUID
    protected $keyType = 'string';

    public function quiz(): HasMany
    {
        return $this->hasMany(Quiz::class, 'course_id', 'id');
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
    }
    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'user_courses', 'course_id', 'user_id');
<<<<<<< HEAD
=======
=======
>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
    }
}
