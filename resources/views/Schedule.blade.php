<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedule</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Schedules</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Title</th>
            <th>Frequency</th>
            <th>Duration</th>
            <th>Time</th>
            <th>Reminder Type</th>
            <th>Reminder Time</th>
            <th>End Date</th>
        </tr>
        </thead>
        <tbody>
        @forelse($schedules as $schedule)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $schedule->title }}</td>
                <td>{{ $schedule->frequency }}</td>
                <td>{{ $schedule->duration }} minutes</td>
                <td>{{ $schedule->time }}</td>
                <td>{{ $schedule->reminder_type }}</td>
                <td>{{ $schedule->reminder_time }} minutes before</td>
                <td>{{ $schedule->end_date ?? 'N/A' }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="8" class="text-center">No schedules found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
