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

        .answer-details-grid {
            display: grid;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }

        .user-answer, .correct-answer {
            padding: 0.5rem;
            border-radius: 5px;
        }

        .text-success {
            color: #28a745 !important;
        }

        .text-danger {
            color: #dc3545 !important;
        }

        .bi-check-circle-fill, .bi-x-circle-fill {
            margin-left: 5px;
        }

        .user-answer {
            padding: 0.5rem;
            border-radius: 5px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .modal-warning-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 1rem;
            animation: warningBounce 1s ease-in-out;
        }

        .modal-content {
            transform: scale(0.7);
            opacity: 0;
            animation: modalPop 0.3s ease-out forwards;
        }

        @keyframes warningBounce {
            0% { transform: scale(0); }
            50% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }

        @keyframes modalPop {
            0% { transform: scale(0.7); opacity: 0; }
            100% { transform: scale(1); opacity: 1; }
        }

        .modal-body {
            text-align: center;
            padding: 2rem;
        }

        .modal-header {
            border-bottom: none;
            padding-bottom: 0;
        }

        .modal-footer {
            border-top: none;
            justify-content: center;
            padding-top: 0;
        }

        .btn-primary {
            background-color: #19535f;
            border: none;
            padding: 10px 30px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #133d47;
            transform: translateY(-2px);
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
                <h5 class="mb-4">Detail Jawaban:</h5>
                @foreach($userAnswer->quiz->questions as $question)
                    @php
                        $questionNumber = $loop->iteration;
                        $questionField = "question_" . $questionNumber;
                        $userAnswerValue = $userAnswer->$questionField;
                        $isCorrect = $userAnswerValue == $question->right_answer;
                    @endphp
                    <div class="answer-item {{ $isCorrect ? 'answer-correct' : 'answer-incorrect' }}">
                        <h6>Soal {{ $questionNumber }}</h6>
                        <p>{{ $question->question }}</p>
                        <div class="answer-details-grid">
                            <div class="user-answer">
                                <div>
                                    <strong>Jawaban Anda:</strong> 
                                    {{ $userAnswerValue }}
                                </div>
                                <i class="bi {{ $isCorrect ? 'bi-check-circle-fill text-success' : 'bi-x-circle-fill text-danger' }}"></i>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="text-center mt-4">
                <a href="{{ route('quiz.index') }}" class="btn-back">
                    <i class="bi bi-arrow-left"></i> Kembali ke Daftar Quiz
                </a>
            </div>
        </div>
    </div>

    @php
        $attempt = $userAnswer->attempt;
        $score = $userAnswer->score
    @endphp

    @if($attempt >= 5 && $score < 80)
    <!-- Modal -->
    <div class="modal fade" id="failureModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="failureModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100 text-center" id="failureModalLabel">Peringatan</h5>
                </div>
                <div class="modal-body">
                    <img src="{{ asset('images/warning-icon.svg') }}" class="modal-warning-icon" alt="Warning">
                    <p class="mb-3"><strong>Anda telah mencoba sebanyak {{ $attempt }} kali dan belum mencapai nilai minimal 80.</strong></p>
                    <p class="text-muted">Anda harus mengulang kembali course ini dari awal.</p>
                </div>
                <div class="modal-footer">
                    <form action="{{ route('quiz.reset-attempts', $userAnswer->quiz_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-primary">
                            OK, Saya Mengerti
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Add Bootstrap JS and show modal -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var myModal = new bootstrap.Modal(document.getElementById('failureModal'));
            myModal.show();
        });
    </script>
    @endif
</body>
</html> 