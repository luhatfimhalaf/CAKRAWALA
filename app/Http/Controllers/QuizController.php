<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;
use App\Models\Question;
use App\Models\UserAnswer;

class QuizController extends Controller
{
    //
    public function index()
    {
        // Get quizzes with course relationship and user answers
        $quiz = Quiz::with(['course', 'userAnswers' => function($query) {
            $query->where('user_id', auth()->id());
        }])->get();

        return view('quiz.index', compact('quiz'));
    }

    public function show($id)
    {
        // Ambil quiz berdasarkan id
        $quiz = Quiz::findOrFail($id);
        
        // Ambil 5 pertanyaan yang terkait dengan quiz_id
        $questions = Question::where('quiz_id', $id)
                        ->take(5)
                        ->get();
        
        // Log questions for debugging
        \Log::info('Quiz questions data:', [
            'quiz_id' => $id,
            'total_questions' => $questions->count(),
            'questions' => $questions->map(function($q) {
                return [
                    'question_no' => $q->question_no,
                    'question' => $q->question,
                    'answers' => [
                        'a' => $q->answer_a,
                        'b' => $q->answer_b,
                        'c' => $q->answer_c, 
                        'd' => $q->answer_d
                    ],
                    'right_answer' => $q->right_answer
                ];
            })
        ]);
        
        // Kirim data ke view
        return view('quiz.show', compact('quiz', 'questions'));
    }
}
