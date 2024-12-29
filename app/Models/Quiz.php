<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Course;
use App\Models\UserAnswer;

class Quiz extends Model
{
    // Nama tabel
    protected $table = 'quiz';

    // Kolom yang dapat diisi secara mass-assignment
    protected $fillable = [
        'course_id',
        'question_no',
        'question',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'right_answer',
        'created_at',
        'updated_at',
    ];

    public function userAnswers()
    {
        return $this->hasMany(UserAnswer::class, 'quiz_id', 'id');
    }

    public function course()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }
}
