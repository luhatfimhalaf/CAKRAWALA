<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Course;

class Quiz extends Model
{
    protected $table = 'quiz';
    
    protected $fillable = [
        'title',
        'description',
        'course_id'
    ];

    /**
     * Get the course that owns the quiz.
     */
    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function userAnswers(): HasMany
    {
        return $this->hasMany(UserAnswer::class, 'quiz_id', 'id');
    }

    public function questions(): HasMany
    {
        return $this->hasMany(Question::class, 'quiz_id', 'id');
    }
}
