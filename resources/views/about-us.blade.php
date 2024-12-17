@extends('layouts.app') <!-- Sesuaikan dengan layout utama proyek Anda -->

@section('content')
<!-- Custom Styles -->
<style>
    body {
        font-family: 'Poppins', sans-serif;
    }
    .about-header {
        background: linear-gradient(to right, #6a11cb, #2575fc);
        color: #fff;
    }
    .about-header h2 {
        font-weight: 700;
    }
    .about-us {
        background: #000;
        color: #fff;
        padding: 3rem 0;
    }
    .about-us h3 span {
        color: #ff5e57;
    }
    .about-us img {
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.3);
    }
    .statistics {
        background: linear-gradient(to right, #ff416c, #ff4b2b);
        color: #fff;
    }
    .statistics h3 {
        font-size: 2rem;
        font-weight: bold;
    }
    .card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
    }
    .testimonials h3, .courses h3, .instructors h3 {
        font-weight: bold;
        margin-bottom: 2rem;
        color: #333;
    }
    .instructors img {
        width: 120px;
        height: 120px;
        object-fit: cover;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    .instructors img:hover {
        transform: scale(1.1);
    }
    .btn-danger {
        background-color: #ff4b2b;
        border: none;
    }
    .btn-danger:hover {
        background-color: #e63946;
    }
</style>

<!-- Section Header -->
<section class="about-header text-center py-5">
    <h2>ABOUT US</h2>
    <p class="mb-0">Home / About Us</p>
</section>

<!-- Section About Us -->
<section class="about-us py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-4">
                <img src="https://via.placeholder.com/300" alt="Students" class="img-fluid mb-3">
            </div>
            <div class="col-md-8">
                <h3>Benefit From Our Online Learning Expertise Earn <span>Professional</span></h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam euismod tincidunt metus, vel accumsan nulla dapibus in.</p>
                <a href="#" class="btn btn-success px-4 py-2">Admission Open</a>
            </div>
        </div>
    </div>
</section>

<!-- Section Statistics -->
<section class="statistics py-5 text-center">
    <div class="container">
        <div class="row">
            <div class="col-md-3 mb-3">
                <h3>3K+</h3>
                <p>Successfully Trained</p>
            </div>
            <div class="col-md-3 mb-3">
                <h3>15K+</h3>
                <p>Classes Completed</p>
            </div>
            <div class="col-md-3 mb-3">
                <h3>97K+</h3>
                <p>Satisfaction Rate</p>
            </div>
            <div class="col-md-3 mb-3">
                <h3>102K+</h3>
                <p>Student Community</p>
            </div>
        </div>
    </div>
</section>

<!-- Section Testimonials -->
<section class="testimonials py-5 text-center">
    <h3>Creating A Community Of Life Long Learners.</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <blockquote>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                    <footer>- Kathy Sullivan, CEO</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                    <footer>- Elsie Stroud, CEO</footer>
                </blockquote>
            </div>
            <div class="col-md-4">
                <blockquote>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit."</p>
                    <footer>- John Doe, Director</footer>
                </blockquote>
            </div>
        </div>
    </div>
</section>

<!-- Section Courses -->
<section class="courses py-5 text-center">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>Our Popular Courses</h3>
            <a href="#" class="btn btn-danger px-4 py-2">Explore Courses</a>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Course">
                    <div class="card-body">
                        <h5>IT Statistics Data Science</h5>
                        <p>★ 4.5 | 10 Lessons | 30hr | Students 20+</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>

<!-- Section Instructors -->
<section class="instructors py-5 text-center">
    <h3>Meet Our Instructors</h3>
    <div class="container">
        <div class="row">
            @foreach (['Michael', 'Cheryl', 'Willie', 'Jimmy'] as $name)
            <div class="col-md-3 mb-4">
                <img src="https://via.placeholder.com/150" alt="{{ $name }}" class="rounded-circle mb-2">
                <h5>{{ $name }} Hammond</h5>
                <p>Teacher</p>
            </div>
            @endforeach
        </div>
    </div>
</section>
@include('layouts.footer')
@endsection
