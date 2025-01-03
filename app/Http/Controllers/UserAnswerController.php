<?php

namespace App\Http\Controllers;

use App\Models\UserAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAnswerController extends Controller
{
    public function submit(Request $request)
    {
        try {
            // Debug
            \Log::info('Received data:', $request->all());

            // Validasi input
            $request->validate([
                'quiz_id' => 'required|exists:quiz,id',
                'question_1' => 'nullable|string',
                'question_2' => 'nullable|string',
                'question_3' => 'nullable|string',
                'question_4' => 'nullable|string',
                'question_5' => 'nullable|string',
                'finish_time' => 'required|integer'
            ]);

            // Debug
            \Log::info('User ID:', [Auth::id()]);
            \Log::info('Quiz ID:', [$request->quiz_id]);

<<<<<<< Updated upstream
            // Hitung score berdasarkan jawaban yang benar
            $quiz = \App\Models\Quiz::with('questions')->findOrFail($request->quiz_id);
            $correctAnswers = 0;
            $totalQuestions = $quiz->questions->count();

            foreach ($quiz->questions as $question) {
                $questionField = "question_" . $question->question_no;
                $userAnswer = $request->$questionField;
                
                if ($userAnswer === $question->right_answer) {
                    $correctAnswers++;
                }
            }

            // Hitung persentase score
            $score = ($totalQuestions > 0) ? ($correctAnswers / $totalQuestions) * 100 : 0;
            $roundedScore = round($score);

            // Cek apakah sudah ada jawaban untuk quiz ini
            $existingAnswer = UserAnswer::where('user_id', Auth::id())
                ->where('quiz_id', $request->quiz_id)
                ->first();

            if ($existingAnswer) {
                $newAttempt = $existingAnswer->attempt + 1;
                
                // Cek jika attempt sudah mencapai 5
                if ($newAttempt >= 5) {
                    // Hapus semua data quiz untuk user ini
                    UserAnswer::where('user_id', Auth::id())
                        ->where('quiz_id', $request->quiz_id)
                        ->delete();
                    
                    return response()->json([
                        'success' => false,
                        'message' => 'Anda telah mencapai batas maksimal 5 kali percobaan',
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
                    'score' => $roundedScore
                ]);

                \Log::info('Answer updated with score:', [
                    'quiz_id' => $request->quiz_id,
                    'attempt' => $newAttempt,
                    'score' => $roundedScore
                ]);

                return response()->json([
                    'success' => true,
                    'message' => 'Jawaban berhasil diperbarui',
                    'quiz_id' => $request->quiz_id,
                    'attempt' => $newAttempt,
                    'score' => $roundedScore,
                    'redirect_url' => route('quiz.result', ['id' => $request->quiz_id])
                ]);
            }
=======
        if ($existingAnswer) {
            $newAttempt = $existingAnswer->attempt + 1;
            
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
>>>>>>> Stashed changes

            // Jika tidak ada data sebelumnya, buat baru
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
                'score' => $roundedScore
            ]);

            // Tambahkan logging sebelum return
            \Log::info('About to return response:', [
                'success' => true,
                'message' => 'Jawaban berhasil disimpan',
                'redirect_url' => route('quiz.result', ['id' => $request->quiz_id])
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Jawaban berhasil disimpan',
                'quiz_id' => $request->quiz_id,
                'score' => $roundedScore,
                'redirect_url' => route('quiz.result', ['id' => $request->quiz_id])
            ]);

        } catch (\Exception $e) {
            // Perbaiki logging error untuk lebih detail
            \Log::error('Error saving answers:', [
                'error' => $e->getMessage(),
                'file' => $e->getFile(),
                'line' => $e->getLine(),
                'trace' => $e->getTraceAsString()
            ]);
            
            return response()->json([
                'success' => false,
                'message' => 'Gagal menyimpan jawaban: ' . $e->getMessage()
            ], 500);
        }
    }

    public function result($id)
    {
        // Ubah cara mengambil user answer
        $userAnswer = UserAnswer::with(['quiz.course', 'quiz.questions'])
            ->where('quiz_id', $id)
            ->where('user_id', Auth::id())
            ->firstOrFail();
        
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

        // Log hasil akhir
        \Log::info('Quiz result calculation', [
            'quiz_id' => $userAnswer->quiz_id,
            'user_id' => $userAnswer->user_id,
            'total_questions' => $totalQuestions,
            'correct_answers' => $correctAnswers,
            'final_score' => $roundedScore
        ]);

        return view('quiz.result', [
            'userAnswer' => $userAnswer,
            'score' => $roundedScore
        ]);
    }

    public function resetAttempts($quiz_id)
    {
        UserAnswer::where('quiz_id', $quiz_id)
            ->where('user_id', Auth::id())
            ->delete();

        return redirect()->route('quiz.index')
            ->with('success', 'Data quiz anda telah direset. Silahkan pelajari kembali materi course ini.');
    }
}
