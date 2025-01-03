<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MyCourse extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'id', 'image', 'title', 'category', 'lessons', 'duration', 
        'students', 'instructor', 'description', 'price',
    ];

    public $incrementing = false; // Karena menggunakan UUID
    protected $keyType = 'string';

    public function quiz(): HasMany
    {
        return $this->hasMany(Quiz::class, 'course_id', 'id');
    }
}
