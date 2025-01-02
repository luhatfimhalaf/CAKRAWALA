<?php

namespace App\Http\Controllers;

use App\Models\UserAnswer;
use App\Models\Certificate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CertificateService;

class UserAnswerController extends Controller
{
    public function submit(Request $request)
    {
        // Validate request
        $request->validate([
            'quiz_id' => 'required|exists:quiz,id',
            'question_1' => 'nullable|string',
            'question_2' => 'nullable|string',
            'question_3' => 'nullable|string',
            'question_4' => 'nullable|string',
            'question_5' => 'nullable|string',
            'finish_time' => 'required|integer'
        ]);

        // Calculate score
        $quiz = \App\Models\Quiz::with('questions')->findOrFail($request->quiz_id);
        $correctAnswers = 0;

        foreach ($quiz->questions as $question) {
            $userAnswer = $request->{"question_" . $question->question_no};
            if ($userAnswer === $question->right_answer) {
                $correctAnswers++;
            }
        }

        $score = round(($correctAnswers / $quiz->questions->count()) * 100);

        // Generate certificate if score >= 80
        if ($score >= 80) {
            Certificate::create([
                'user_id' => Auth::id(),
                'quiz_id' => $request->quiz_id,
                'certificate_number' => Certificate::generateCertificateNumber(),
                'score' => $score,
                'completion_date' => now()
            ]);
        }

        // Check existing answer
        $existingAnswer = UserAnswer::where('user_id', Auth::id())
            ->where('quiz_id', $request->quiz_id)
            ->first();

        if ($existingAnswer) {
            $newAttempt = $existingAnswer->attempt + 1;
            
            if ($newAttempt > 5) {
                UserAnswer::where('user_id', Auth::id())
                    ->where('quiz_id', $request->quiz_id)
                    ->delete();
                
                return response()->json([
                    'success' => false,
                    'message' => 'Submit gagal! Anda telah mencapai batas maksimal 5 kali percobaan',
                    'limitReached' => true
                ]);
            }
            
            $existingAnswer->update([
                'question_1' => $request->question_1,
                'question_2' => $request->question_2,
                'question_3' => $request->question_3,
                'question_4' => $request->question_4,
                'question_5' => $request->question_5,
                'finish_time' => $request->finish_time,
                'attempt' => $newAttempt,
                'score' => $score
            ]);

            $message = 'Jawaban berhasil diperbarui';
        } else {
            UserAnswer::create([
                'user_id' => Auth::id(),
                'quiz_id' => $request->quiz_id,
                'question_1' => $request->question_1,
                'question_2' => $request->question_2,
                'question_3' => $request->question_3,
                'question_4' => $request->question_4,
                'question_5' => $request->question_5,
                'finish_time' => $request->finish_time,
                'attempt' => 1,
                'score' => $score
            ]);

            $message = 'Jawaban berhasil disimpan';
        }

        return response()->json([
            'success' => true,
            'message' => $message,
            'quiz_id' => $request->quiz_id,
            'score' => $score,
            'attempt' => $existingAnswer ? $newAttempt : 1,
            'redirect_url' => route('quiz.result', ['id' => $request->quiz_id])
        ]);
    }

    public function result($id)
    {
        // Ambil user answer beserta relasinya
        $userAnswer = UserAnswer::with(['quiz.course', 'quiz.questions'])->findOrFail($id);
        
        // Hitung skor dengan membandingkan jawaban user dengan jawaban benar
        $correctAnswers = 0;
        $totalQuestions = $userAnswer->quiz->questions->count();

        // Loop melalui setiap pertanyaan di quiz
        foreach ($userAnswer->quiz->questions as $question) {
            $questionField = "question_" . $question->question_no;
            $userAnswerValue = $userAnswer->$questionField;
            $correctAnswer = $question->right_answer;

            // Bandingkan jawaban user dengan jawaban benar dari tabel Question
            if ($userAnswerValue === $correctAnswer) {
                $correctAnswers++;
            }

            // Log untuk debugging
            \Log::info("Checking answer for question {$question->question_no}", [
                'user_answer' => $userAnswerValue,
                'correct_answer' => $correctAnswer,
                'is_correct' => $userAnswerValue === $correctAnswer
            ]);
        }
        
        // Hitung persentase skor
        $score = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;
        $roundedScore = round($score);

        return view('quiz.result', [
            'userAnswer' => $userAnswer,
            'score' => $roundedScore
        ]);
    }
}
