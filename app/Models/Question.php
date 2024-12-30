<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Question extends Model
{
    protected $table = 'question';

    protected $fillable = [
        'quiz_id',
        'question_no',
        'question',
        'answer_a',
        'answer_b',
        'answer_c',
        'answer_d',
        'right_answer'
    ];

    public function quiz(): BelongsTo
    {
        return $this->belongsTo(Quiz::class, 'quiz_id', 'id');
    }
}
