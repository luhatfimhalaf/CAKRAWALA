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
</div>
