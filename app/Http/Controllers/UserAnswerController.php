<?php

namespace App\Http\Controllers;

use App\Models\UserAnswer;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAnswerController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Validasi input
            $validated = $request->validate([
                'question_1' => 'nullable|in:answer_a,answer_b,answer_c,answer_d',
                'question_2' => 'nullable|in:answer_a,answer_b,answer_c,answer_d',
                'question_3' => 'nullable|in:answer_a,answer_b,answer_c,answer_d',
                'question_4' => 'nullable|in:answer_a,answer_b,answer_c,answer_d',
                'question_5' => 'nullable|in:answer_a,answer_b,answer_c,answer_d',
                'quiz_id' => 'required|exists:quiz,id',
                'finish_time' => 'required|integer|max:600'
            ]);

            // Ambil course_id dari quiz
            $quiz = Quiz::findOrFail($validated['quiz_id']);
            $course_id = $quiz->course_id;

            // Cek jumlah attempt
            $attemptCount = UserAnswer::where('user_id', Auth::id())
                                    ->where('quiz_id', $request->quiz_id)
                                    ->count();

            // Simpan jawaban
            $userAnswer = UserAnswer::create([
                'user_id' => Auth::id(),
                'quiz_id' => $validated['quiz_id'],
                'course_id' => $course_id,
                'question_1' => $validated['question_1'],
                'question_2' => $validated['question_2'],
                'question_3' => $validated['question_3'],
                'question_4' => $validated['question_4'],
                'question_5' => $validated['question_5'],
                'attempt' => $attemptCount + 1,
                'finish_time' => $validated['finish_time']
            ]);

            // Ambil quiz untuk menghitung skor
            $quizzes = Quiz::where('course_id', $userAnswer->quiz->course_id)->get();
            
            // Hitung skor
            $correctAnswers = 0;
            for ($i = 1; $i <= 5; $i++) {
                $questionField = "question_$i";
                $quiz = $quizzes->where('question_no', $i)->first();
                if ($userAnswer->$questionField === $quiz->right_answer) {
                    $correctAnswers++;
                }
            }
            
            $score = ($correctAnswers / 5) * 100;

            return response()->json([
                'success' => true,
                'redirect_url' => route('quiz.result', ['id' => $userAnswer->id])
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Error saving answers: ' . $e->getMessage()
            ], 500);
        }
    }

    public function result($id)
    {
        $userAnswer = UserAnswer::with('quiz.course')->findOrFail($id);
        $quizzes = Quiz::where('course_id', $userAnswer->quiz->course_id)->get();
        
        // Hitung skor
        $correctAnswers = 0;
        for ($i = 1; $i <= 5; $i++) {
            $questionField = "question_$i";
            $quiz = $quizzes->where('question_no', $i)->first();
            if ($userAnswer->$questionField === $quiz->right_answer) {
                $correctAnswers++;
            }
        }
        
        $score = ($correctAnswers / 5) * 100;

        return view('quiz.result', compact('userAnswer', 'quizzes', 'score'));
    }
}
