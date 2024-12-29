<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAnswer extends Model
{
    protected $table = 'user_answer';
    
    protected $fillable = [
        'user_id',
        'quiz_id',
        'course_id',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'attempt',
        'finish_time'
    ];

    public function quiz()
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }
}
