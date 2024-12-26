<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'id', 'image', 'title', 'category', 'lessons', 'duration', 
        'students', 'instructor', 'description', 'price',
    ];

    public $incrementing = false; // Karena menggunakan UUID
    protected $keyType = 'string';
}
