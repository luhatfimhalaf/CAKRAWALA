<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
<div class="course-detail">
    <h1>{{ $course->title }}</h1>
    <p>{{ $course->description }}</p>
    @if($course->video_url)
    <iframe 
    width="100%" 
    height="400" 
    src="https://www.youtube.com/embed/{{ extractYouTubeVideoId($course->video_url) }}" 
    frameborder="0" 
    allowfullscreen>
</iframe>
    @else
        <p>Video not available</p>
    @endif
<<<<<<< HEAD
</div>
=======
</div>
=======
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kursus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        body {
            margin: 0;
            padding: 0;
            background-color: #f4f7f6;
            color: #19535f;
            font-family: 'Poppins', sans-serif;
            display: flex;
            flex-direction: column;
        }

        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 260px;
            background-color: #19535f;
            color: #ffffff;
            padding: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 10px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            font-weight: bold;
            margin-bottom: 30px;
            color: #ffffff;
            text-align: center;
            letter-spacing: 2px;
        }

        .sidebar a {
            display: flex;
            align-items: center;
            color: #ffffff;
            margin: 10px 0;
            padding: 12px 15px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .sidebar a i {
            margin-right: 10px;
        }

        .sidebar a:hover {
            background-color: #133d47;
        }

        .sidebar a.active {
            background-color: #0f2e38;
        }

        .main-content {
            margin-left: 0;
            padding: 0;
        }

        .course-header {
            background: linear-gradient(90deg, #19535f, #0f2e38);
            color: #ffffff;
            text-align: center;
            padding: 50px 20px;
            border-radius: 0;
            margin: 0;
        }

        .course-header h2 {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        .course-header p {
            font-size: 1.1rem;
        }

        .course-main {
            display: flex;
            gap: 20px;
            margin: 20px 0;
            padding: 0 20px;
            justify-content: flex-start;
            align-items: stretch;
        }

        .course-content {
            flex: 1;
            max-width: 800px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        .course-content img {
            width: 100%;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .tabs button {
            margin-right: 10px;
            padding: 10px 15px;
            background: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .tabs button:hover {
            background: #133d47;
        }

        .course-sidebar {
            flex: 0 0 300px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .price-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2rem;
            color: #19535f;
            font-weight: bold;
        }

        .original-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #999;
        }

        .buy-now {
            display: block;
            margin-top: 10px;
            padding: 10px 15px;
            background: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .buy-now:hover {
            background: #133d47;
        }

        .course-info {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .course-info li {
            margin-bottom: 10px;
        }

        .course-info strong {
            font-weight: 600;
            color: #19535f;
        }

        /* Animations */
        .course-content, .course-sidebar {
            animation: fadeIn 1s ease-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        .course-thumbnail {
            width: 600px; /* Atur lebar gambar */
            height: 300px; /* Atur tinggi gambar */
            object-fit: cover; /* Memastikan gambar tidak terdistorsi */
            border-radius: 10px; /* Opsional, tambahkan efek rounded */
        }
        .course-main {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin: 20px;
        }

        .course-content {
            flex: 3;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .course-thumbnail {
            width: 100%;
            height: 300px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .tabs {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }

        .tabs button {
            padding: 10px 15px;
            background: #19535f;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .tabs button:hover {
            background: #133d47;
        }

        .tabs button.active {
            background: #0f2e38;
        }

        .course-sidebar {
            flex: 1;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .price-box {
            text-align: center;
            margin-bottom: 20px;
        }

        .price {
            font-size: 2rem;
            color: #19535f;
            font-weight: bold;
        }

        .original-price {
            font-size: 1rem;
            text-decoration: line-through;
            color: #999;
        }

        .buy-now {
            display: inline-block;
            padding: 10px 20px;
            background: #19535f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .buy-now:hover {
            background: #133d47;
        }

        #tab-content {
            background: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        #tab-content h3 {
            color: #19535f;
            margin-bottom: 15px;
        }

        #tab-content ul {
            padding-left: 20px;
            list-style: disc;
        }

        #tab-content ul li {
            margin-bottom: 10px;
        }

        .quiz-info ul li strong {
            color: #19535f;
            display: block;
            margin-bottom: 5px;
        }

        .quiz-info ul li p {
            margin: 0;
            color: #666;
        }

        /* Responsif untuk layar kecil */
        @media (max-width: 768px) {
            .course-main {
                flex-direction: column;
            }
            
            .course-sidebar {
                flex: 1;
                width: 100%;
            }
        }

        .quiz-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .quiz-info ul {
            flex-grow: 1;
            margin-bottom: 0;
        }

        /* Tambahkan style untuk timer */
        #timer {
            text-align: center;
            padding: 10px;
            background-color: #f8f9fa;
            border-radius: 5px;
            margin: 5px 0;
            font-family: 'Courier New', monospace;
        }

        /* Update styles untuk tabs */
        .tabs button {
            padding: 10px;
            background: #19535f;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
            font-size: 14px;
        }

        .tabs button:hover {
            background: #133d47;
        }

        .tabs button.active {
            background: #0f2e38;
            font-weight: bold;
        }

        /* Pastikan sidebar memiliki padding yang konsisten */
        .course-sidebar {
            flex: 0 0 300px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            height: auto;
            display: flex;
            flex-direction: column;
        }

        .quiz-info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        /* Hapus margin dan padding yang tidak perlu dari course-content */
        .course-content {
            flex: 1;
            max-width: 800px;
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            display: flex;
            flex-direction: column;
        }

        /* Style untuk tombol clear */
        .clear-btn {
            padding: 5px 10px;
            background: transparent;
            color: #19535f;
            border: 1px solid #19535f;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            display: flex;
            align-items: center;
            gap: 5px;
            transition: all 0.3s ease;
        }

        .clear-btn:hover {
            background: #f8f9fa;
            color: #dc3545;
            border-color: #dc3545;
        }

        /* Update style untuk question-btn */
        .question-btn.cleared {
            background: #ffffff;
            color: #19535f;
            border: 2px solid #19535f;
        }

        /* Tambahkan style untuk animasi */
        .question-container {
            position: relative;
            overflow: hidden;
        }

        #tab-question, #tab-answer {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.3s ease-out;
        }

        #tab-question.slide-in, #tab-answer.slide-in {
            opacity: 1;
            transform: translateX(0);
        }

        #tab-question.slide-out, #tab-answer.slide-out {
            opacity: 0;
            transform: translateX(-20px);
        }

        /* Animasi untuk arah sebaliknya */
        #tab-question.slide-in-reverse, #tab-answer.slide-in-reverse {
            opacity: 1;
            transform: translateX(0);
        }

        #tab-question.slide-out-reverse, #tab-answer.slide-out-reverse {
            opacity: 0;
            transform: translateX(20px);
        }
    </style>
</head>
<body>

  <div class="main-content">
    <div class="course-header">
      <h2>Kuis</h2>
      <p>Selamat mengerjakan! Semoga mendapatkan hasil yang terbaik</p>
    </div>

    <div class="course-main">
    <div class="course-sidebar">
        <h4><strong>Informasi Quiz</strong></h4>
        <div class="quiz-info">
            <ul style="list-style-type: none; padding-left: 0;">
                <li style="margin-bottom: 15px;">
                    <strong>Nama Course:</strong>
                    <p>{{ $quiz->course->title }}</p>
                </li>
                <li style="margin-bottom: 15px;">
                    <strong>Jumlah Soal:</strong>
                    <p>5 Soal</p>
                </li>
                <li style="margin-bottom: 15px;">
                    <strong>Sisa Waktu:</strong>
                    <p id="timer" style="font-size: 24px; color: #19535f; font-weight: bold;">10:00</p>
                </li>
                <li style="margin-bottom: 15px;">
                    <strong>Status:</strong>
                    <p>Belum Selesai</p>
                </li>
                <li>
                    <strong>Navigasi Soal:</strong>
                    <div class="tabs" style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin-top: 10px;">
                        <button onclick="showContent('no1')" id="tab-no1" class="active">1</button>
                        <button onclick="showContent('no2')" id="tab-no2">2</button>
                        <button onclick="showContent('no3')" id="tab-no3">3</button>
                        <button onclick="showContent('no4')" id="tab-no4">4</button>
                        <button onclick="showContent('no5')" id="tab-no5">5</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div class="course-content">
        <img src="{{ asset($quiz->course->image) }}" alt="Course Image" class="course-thumbnail">
        <div id="tab-question">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h4><strong>Nomor ${question.question_no}</strong></h4>
                <button onclick="clearAnswer()" class="clear-btn">
                    <i class="bi bi-x-circle"></i> Clear
                </button>
            </div>
            <p>${question.question}</p>
        </div>

        <div id="tab-answer">
            <div style="margin-top: 30px;">
                <h6><strong>Pilihan Jawaban</strong></h6>
                <ul style="list-style-type: none; padding-left: 25px;">
                    <li style="display: flex; align-items: center; margin-bottom: 10px;">
                        <input type="radio" name="answer" id="answer_a" value="answer_a" style="margin-right: 10px;"> 
                        <label for="answer_a" style="margin-left: 10px;">${question.answer_a}</label>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;">
                        <input type="radio" name="answer" id="answer_b" value="answer_b" style="margin-right: 10px;"> 
                        <label for="answer_b" style="margin-left: 10px;">${question.answer_b}</label>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;">
                        <input type="radio" name="answer" id="answer_c" value="answer_c" style="margin-right: 10px;"> 
                        <label for="answer_c" style="margin-left: 10px;">${question.answer_c}</label>
                    </li>
                    <li style="display: flex; align-items: center; margin-bottom: 10px;">
                        <input type="radio" name="answer" id="answer_d" value="answer_d" style="margin-right: 10px;"> 
                        <label for="answer_d" style="margin-left: 10px;">${question.answer_d}</label>
                    </li>
                </ul>
                <div style="padding-left: 25px; margin-top: 15px;">
                    <button onclick="clearAnswer()" class="clear-btn">
                        <i class="bi bi-x-circle"></i> Clear Pilihan
                    </button>
                </div>
            </div>
        </div>
        
        <div style="display: flex; justify-content: flex-end; margin-top: 20px; gap: 10px;">
            <button onclick="prevQuestion()" class="btn btn-secondary" style="background: #19535f; color: white; border: none; padding: 10px 20px; border-radius: 5px;">Previous</button>
            <button onclick="nextQuestion()" class="btn btn-primary" style="background: #19535f; color: white; border: none; padding: 10px 20px; border-radius: 5px;">Next</button>
        </div>
    </div>
</div>

<script>
    // Tambahkan ini di awal script untuk menyimpan data pertanyaan
    const questions = @json($questions);
    // Tambahkan object untuk menyimpan jawaban
    const userAnswers = {};

    function saveAnswer() {
        const selectedAnswer = document.querySelector('input[name="answer"]:checked');
        if (selectedAnswer) {
            const currentNumber = getCurrentQuestionNumber();
            // Get the actual answer text from the label
            const answerLabel = document.querySelector(`label[for="${selectedAnswer.id}"]`);
            const answerText = answerLabel.textContent.trim();
            userAnswers[currentNumber] = answerText;
            
            console.log('Saved answer:', {
                questionNumber: currentNumber,
                answer: answerText,
                allAnswers: userAnswers
            });
        }
    }

    function loadAnswer(questionNumber) {
        const savedAnswer = userAnswers[questionNumber];
        if (savedAnswer) {
            // Find the radio button by matching the label text
            const labels = document.querySelectorAll('label');
            labels.forEach(label => {
                if (label.textContent.trim() === savedAnswer) {
                    const radioId = label.getAttribute('for');
                    const radioButton = document.getElementById(radioId);
                    if (radioButton) {
                        radioButton.checked = true;
                    }
                }
            });
        }
    }

    // Update fungsi showContent yang sudah ada
    function showContent(tab, direction = 'right') {
        // Simpan jawaban sebelum pindah
        const currentNumber = getCurrentQuestionNumber();
        if (currentNumber) {
            saveAnswer();
        }

        const tabQuestion = document.getElementById('tab-question');
        const tabAnswer = document.getElementById('tab-answer');
        const buttons = document.querySelectorAll('.tabs button');
        
        buttons.forEach(button => button.classList.remove('active'));
        document.getElementById(`tab-${tab}`).classList.add('active');

        const questionNumber = parseInt(tab.replace('no', ''));
        const question = questions.find(q => q.question_no === questionNumber);

        // Hapus semua class animasi sebelum menambahkan yang baru
        tabQuestion.classList.remove('slide-in', 'slide-in-reverse', 'slide-out', 'slide-out-reverse');
        tabAnswer.classList.remove('slide-in', 'slide-in-reverse', 'slide-out', 'slide-out-reverse');

        // Tambahkan kelas slide-out yang sesuai
        if (direction === 'right') {
            tabQuestion.classList.add('slide-out');
            tabAnswer.classList.add('slide-out');
        } else {
            tabQuestion.classList.add('slide-out-reverse');
            tabAnswer.classList.add('slide-out-reverse');
        }

        // Tunggu animasi slide-out selesai
        setTimeout(() => {
            // Update konten
            tabQuestion.innerHTML = `
                <h4><strong>Nomor ${question.question_no}</strong></h4>
                <p>${question.question}</p>
            `;

            tabAnswer.innerHTML = `
                <div style="margin-top: 30px;">
                    <h6><strong>Pilihan Jawaban</strong></h6>
                    <ul style="list-style-type: none; padding-left: 25px;">
                        <li style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="answer" id="answer_a" value="answer_a" style="margin-right: 10px;"> 
                            <label for="answer_a" style="margin-left: 10px;">${question.answer_a}</label>
                        </li>
                        <li style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="answer" id="answer_b" value="answer_b" style="margin-right: 10px;"> 
                            <label for="answer_b" style="margin-left: 10px;">${question.answer_b}</label>
                        </li>
                        <li style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="answer" id="answer_c" value="answer_c" style="margin-right: 10px;"> 
                            <label for="answer_c" style="margin-left: 10px;">${question.answer_c}</label>
                        </li>
                        <li style="display: flex; align-items: center; margin-bottom: 10px;">
                            <input type="radio" name="answer" id="answer_d" value="answer_d" style="margin-right: 10px;"> 
                            <label for="answer_d" style="margin-left: 10px;">${question.answer_d}</label>
                        </li>
                    </ul>
                    <div style="padding-left: 25px; margin-top: 15px;">
                        <button onclick="clearAnswer()" class="clear-btn">
                            <i class="bi bi-x-circle"></i> Clear Pilihan
                        </button>
                    </div>
                </div>
            `;

            // Hapus kelas slide-out dan tambahkan slide-in yang sesuai
            tabQuestion.classList.remove('slide-out', 'slide-out-reverse');
            tabAnswer.classList.remove('slide-out', 'slide-out-reverse');
            
            if (direction === 'right') {
                tabQuestion.classList.add('slide-in');
                tabAnswer.classList.add('slide-in');
            } else {
                tabQuestion.classList.add('slide-in-reverse');
                tabAnswer.classList.add('slide-in-reverse');
            }

            // Tambahkan tombol navigasi dan submit
            const navigationDiv = document.createElement('div');
            navigationDiv.style.cssText = 'display: flex; justify-content: flex-end; margin-top: 20px; gap: 10px;';

            if (questionNumber === 5) {
                navigationDiv.innerHTML = `
                    <button onclick="prevQuestion()" class="btn btn-secondary" 
                        style="background: #19535f; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease;">
                        Previous
                    </button>
                    <button onclick="submitQuiz()" class="btn btn-primary" 
                        style="background: #dc3545; color: white; border: none; padding: 10px 30px; border-radius: 5px; font-weight: bold; transition: all 0.3s ease;">
                        Submit Quiz
                    </button>
                `;
            } else {
                navigationDiv.innerHTML = `
                    <div style="display: flex; gap: 10px;">
                        ${questionNumber > 1 ? 
                            `<button onclick="prevQuestion()" class="btn btn-secondary" 
                                style="background: #19535f; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease;">
                                Previous
                            </button>` : 
                            ''
                        }
                        <button onclick="nextQuestion()" class="btn btn-primary" 
                            style="background: #19535f; color: white; border: none; padding: 10px 20px; border-radius: 5px; transition: all 0.3s ease;">
                            Next
                        </button>
                    </div>
                `;
            }

            // Hapus navigasi lama jika ada
            const oldNav = document.querySelector('.course-content > div:last-child');
            if (oldNav && oldNav.querySelector('button')) {
                oldNav.remove();
            }

            // Tambahkan navigasi baru
            document.querySelector('.course-content').appendChild(navigationDiv);

            // Tambahkan hover effect untuk tombol
            const buttons = navigationDiv.querySelectorAll('button');
            buttons.forEach(button => {
                button.addEventListener('mouseover', function() {
                    if (this.textContent.trim() === 'Submit Quiz') {
                        this.style.background = '#c82333'; // Warna merah yang lebih gelap untuk hover Submit
                    } else {
                        this.style.background = '#133d47'; // Warna hijau gelap untuk hover tombol navigasi
                    }
                });
                button.addEventListener('mouseout', function() {
                    if (this.textContent.trim() === 'Submit Quiz') {
                        this.style.background = '#dc3545'; // Kembali ke warna merah normal untuk Submit
                    } else {
                        this.style.background = '#19535f'; // Kembali ke warna hijau normal untuk navigasi
                    }
                });
            });

            // Tambahkan radio listeners
            addRadioListeners();

            // Load jawaban yang tersimpan
            setTimeout(() => {
                loadAnswer(questionNumber);
            }, 50);
        }, 300);
    }

    // Tampilkan pertanyaan pertama saat halaman dimuat
    document.addEventListener('DOMContentLoaded', () => {
        showContent('no1');
    });

    // Tambahkan fungsi untuk navigasi
    function getCurrentQuestionNumber() {
        const activeTab = document.querySelector('.tabs button.active');
        return parseInt(activeTab.id.replace('tab-no', ''));
    }

    function prevQuestion() {
        const currentNumber = getCurrentQuestionNumber();
        if (currentNumber > 1) {
            showContent(`no${currentNumber - 1}`, 'left');
        }
    }

    function nextQuestion() {
        const currentNumber = getCurrentQuestionNumber();
        if (currentNumber < 5) {
            showContent(`no${currentNumber + 1}`, 'right');
        }
    }

    // Tambahkan fungsi clearAnswer di script
    function clearAnswer() {
        const currentNumber = getCurrentQuestionNumber();
        delete userAnswers[currentNumber];
        const radioButtons = document.querySelectorAll('input[name="answer"]');
        radioButtons.forEach(radio => {
            radio.checked = false;
        });
        document.getElementById(`tab-no${currentNumber}`).classList.remove('answered');
    }

    // Tambahkan script untuk timer
    function startTimer(duration, display) {
        let timer = duration, minutes, seconds;
        let countdown = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;

            if (--timer < 0) {
                clearInterval(countdown);
                display.textContent = "Waktu Habis!";
                display.style.color = "#dc3545"; // Warna merah untuk indikasi waktu habis
                // Tambahkan fungsi yang akan dijalankan ketika waktu habis
                handleTimeUp();
            }
        }, 1000);
    }

    function handleTimeUp() {
        submit(); // Submit otomatis ketika waktu habis
    }

    // Jalankan timer ketika halaman dimuat
    window.onload = function () {
        let tenMinutes = 60 * 10, // 10 menit dalam detik
            display = document.querySelector('#timer');
        startTimer(tenMinutes, display);
    };

    // Tambahkan event listener untuk radio buttons
    function addRadioListeners() {
        const radioButtons = document.querySelectorAll('input[name="answer"]');
        radioButtons.forEach(radio => {
            radio.addEventListener('change', function() {
                saveAnswer();
            });
        });
    }

    let remainingTime = 600; // 10 menit dalam detik

    function submitQuiz() {
        // Simpan jawaban terakhir sebelum submit
        saveAnswer();
        
        // Kumpulkan semua jawaban
        const answers = {
            question_1: userAnswers[1] || null,
            question_2: userAnswers[2] || null,
            question_3: userAnswers[3] || null,
            question_4: userAnswers[4] || null,
            question_5: userAnswers[5] || null,
            quiz_id: {{ $quiz->id }},
            finish_time: 600 - remainingTime
        };

        // Kirim data ke endpoint submit
        fetch('/quiz/submit', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
            },
            body: JSON.stringify(answers)
        })
        .then(response => {
            return response.json();
        })
        .then(data => {
            if (!data.success) {
                if (data.limitReached) {
                    Swal.fire({
                        title: 'Peringatan',
                        text: data.message,
                        icon: 'warning',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        window.location.href = '/dashboard';
                    });
                    return;
                }
                throw new Error(data.message);
            }
            // handle successful response
            if (data.redirect_url) {
                window.location.href = data.redirect_url;
            }
        })
        .catch(error => {
            console.error('Error:', error);
            Swal.fire({
                title: 'Error',
                text: 'Terjadi kesalahan: ' + error.message,
                icon: 'error',
                confirmButtonText: 'OK'
            });
        });
    }

    // Update fungsi timer untuk menyimpan sisa waktu
    function startTimer(duration, display) {
        remainingTime = duration;
        let timer = duration, minutes, seconds;
        let countdown = setInterval(function () {
            minutes = parseInt(timer / 60, 10);
            seconds = parseInt(timer % 60, 10);

            minutes = minutes < 10 ? "0" + minutes : minutes;
            seconds = seconds < 10 ? "0" + seconds : seconds;

            display.textContent = minutes + ":" + seconds;
            remainingTime = timer; // Update sisa waktu

            if (--timer < 0) {
                clearInterval(countdown);
                display.textContent = "Waktu Habis!";
                display.style.color = "#dc3545";
                handleTimeUp();
            }
        }, 1000);
    }
</script>
</body>
</html>
>>>>>>> 837017c7f2a8ea4a152f4910bbb861934e383975
>>>>>>> 8f5fd836cd356f5db71fd9418e40364e773adcdf
