<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\UserAnswer;
use App\Models\Quiz;

class QuestionController extends Controller
{
    public function getQuestionsByQuizId($quizId)
    {
        $questions = Question::where('quiz_id', $quizId)->get();
        return response()->json($questions);
    }    
}
