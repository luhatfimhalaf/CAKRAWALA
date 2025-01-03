<style>
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
        font-size: 1.5rem;
        font-weight: bold;
        text-align: center;
        color: #ffffff;
        margin-bottom: 30px;
    }
    .sidebar a {
        display: flex;
        align-items: center;
        color: #ffffff;
        margin: 10px 0;
        padding: 10px 15px;
        border-radius: 8px;
        text-decoration: none;
        transition: background 0.3s ease;
        font-size: 0.9rem;
        font-weight: 500;
    }
    .sidebar a i {
        margin-right: 10px;
    }
    .sidebar a:hover, .sidebar a.active {
        background-color: #133d47;
    }
    .profile-section {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-top: 20px;
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        padding-top: 20px;
    }
    .profile-section img {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
        margin-bottom: 10px;
    }
    .profile-section p {
        margin: 0;
        font-size: 0.9rem;
        color: #d4e3e5;
        text-align: center;
    }
</style>

<div class="sidebar">
    <!-- Navigation Links -->
    <div>
        <h2>CAKRAWALA</h2>
        <a href="{{ route('dashboard') }}" ><i class="bi bi-house"></i> Dashboard</a>
        <a href="{{ route('kursus.index') }}" ><i class="bi bi-book"></i> Courses</a>
        <a href="#" class="active"><i class="bi bi-app-indicator"></i>Reminder</a>
        <a href="{{ route('quiz.index') }}"><i class="bi bi-list-task"></i> Quiz</a>
        <a href="#"><i class="bi bi-chat"></i>Forum</a>
        <a href="{{ route('faq.index') }}" class="active"><i class="bi bi-question-circle"></i> FAQ</a>
        <a href="#"><i class="bi bi-bell"></i> Notifications</a>
        <a href="{{route('profile.edit')}}"><i class="bi bi-gear"></i> Settings</a>
    </div>

    <!-- Profile Section -->
    <div class="profile-section">
        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profile Picture"><p>{{ auth()->user()->name }}</p>
    <p>{{ auth()->user()->email }}</p>
</div>

</div>
