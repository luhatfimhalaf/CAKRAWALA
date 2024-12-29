<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use App\Models\Course;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index()
    {
        // Ambil ID user yang sedang login
        $userId = auth()->id();

        // Ambil quiz yang belum dikerjakan oleh user
        $quizzes = Quiz::select('quiz.*')
                    ->distinct()
                    ->with('course')
                    ->leftJoin('user_answer', function($join) use ($userId) {
                        $join->on('quiz.id', '=', 'user_answer.quiz_id')
                             ->where('user_answer.user_id', '=', $userId);
                    })
                    ->whereNull('user_answer.id')
                    ->get();

        // Ambil semua data kursus
        $courses = Course::all();

        // Kirim kedua data ke view
        return view('quiz.index', compact('quizzes', 'courses'));
    }

    public function show($id)
    {
        // Ambil semua soal quiz berdasarkan course_id
        $questions = Quiz::where('course_id', $id)
                        ->take(5)  // Ambil 5 soal
                        ->get();
        
        // Ambil quiz untuk data course (bisa pakai yang mana saja karena course_id sama)
        $quiz = $questions[0];

        // Kirim data ke view
        return view('quiz.show', compact('quiz', 'questions'));
    }


    public function getQuestion($course_id)
    {
    // Ambil semua pertanyaan berdasarkan course_id
    return Quiz::where('course_id', $course_id)->get();
    }

    
    public function checkAnswer(Request $request)
    {
        $question_id = $request->question_id;
        $user_answer = $request->answer;
        
        $correct_answer = $this->getCorrectAnswer($question_id);

        if($user_answer == $correct_answer) {
            return redirect()->back()->with('success', 'Jawaban benar!');
        } else {
            return redirect()->back()->with('error', 'Jawaban salah!');
        }
    }


    public function getCorrectAnswer($question_id) 
    {
        $quiz = Quiz::find($question_id);
        return $quiz->right_answer;
    }

    public function getCourseTitle($course_id)
    {
        $quiz = Quiz::where('course_id', $course_id)->first();
        
        if ($quiz) {
            $course = $quiz->course;
            return $course->title;
        }
        
        return null;
    }

    public function getImage($course_id)
    {
        $quiz = Quiz::where('course_id', $course_id)->first();
        
        if ($quiz) {
            $course = $quiz->course;
            return $course->image;
        }
        
        return null;
    }

    public function getCategory($course_id) 
    {
        $quiz = Quiz::where('course_id', $course_id)->first();
        
        if ($quiz) {
            $course = $quiz->course;
            return $course->category;
        }
        
        return null;
    }
}