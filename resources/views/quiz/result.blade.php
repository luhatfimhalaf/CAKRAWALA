<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Quiz - {{ $userAnswer->quiz->course->title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        .result-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            margin-top: 2rem;
        }

        .score-circle {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            background: #19535f;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2.5rem;
            font-weight: bold;
            margin: 2rem auto;
        }

        .answer-item {
            padding: 1rem;
            border-radius: 10px;
            margin-bottom: 1rem;
        }

        .answer-correct {
            background-color: #d4edda;
            border-left: 5px solid #28a745;
        }

        .answer-incorrect {
            background-color: #f8d7da;
            border-left: 5px solid #dc3545;
        }

        .btn-back {
            background-color: #19535f;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s;
        }

        .btn-back:hover {
            background-color: #133d47;
            color: white;
        }

        .completion-time {
            font-size: 1.1rem;
            color: #6c757d;
            margin: 1rem 0;
        }
    </style>
</head>
<body>
    <div class="container py-5">
        <div class="text-center mb-4">
            <h2>Hasil Quiz</h2>
            <h4>{{ $userAnswer->quiz->course->title }}</h4>
        </div>

        <div class="result-card">
            <div class="quiz-info mb-4">
                <div class="row">
                    <div class="col-md-5">
                        <p><i class="bi bi-person"></i> <strong>Nama:</strong> {{ auth()->user()->name }}</p>
                    </div>
                    <div class="col-md-7 text-md-end">
                        <p><i class="bi bi-calendar-check"></i> <strong>Selesai:</strong> 
                            {{ \Carbon\Carbon::parse($userAnswer->created_at)
                                ->addHours(7)
                                ->locale('id')
                                ->isoFormat('dddd, D MMMM Y - HH:mm') }} WIB
                        </p>
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="score-circle">
                    {{ $score }}%
                </div>
                <div class="completion-time">
                    <i class="bi bi-clock"></i> Waktu Pengerjaan: {{ floor($userAnswer->finish_time / 60) }} menit {{ $userAnswer->finish_time % 60 }} detik
                </div>
            </div>

            <div class="answer-details mt-5">
                <h5 class="mb-4">Jawaban Anda:</h5>
                @for ($i = 1; $i <= 5; $i++)
                    @php
                        $questionField = "question_$i";
                        $userAnswerValue = $userAnswer->$questionField;
                        $quiz = $quizzes->where('question_no', $i)->first();
                        $answerText = $quiz->{$userAnswerValue};
                        $isCorrect = $userAnswerValue === $quiz->right_answer;
                    @endphp
                    <div class="answer-item {{ $isCorrect ? 'answer-correct' : 'answer-incorrect' }}">
                        <h6>Soal {{ $i }}</h6>
                        <p>{{ $quiz->question }}</p>
                        <div>
                            <strong>Jawaban Anda:</strong> {{ $answerText }}
                        </div>
                    </div>
                @endfor
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('quiz.index') }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Quiz
                </a>
            </div>
        </div>
    </div>
</body>
</html> 