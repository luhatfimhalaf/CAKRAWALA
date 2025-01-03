<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserAnswer extends Model
{
    protected $table = 'user_answer';

    protected $fillable = [
        'user_id',
        'quiz_id',
        'question_1',
        'question_2',
        'question_3',
        'question_4',
        'question_5',
        'attempt',
        'finish_time',
        'score'
    ];

    /**
     * Get the user that owns the answer
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
}
