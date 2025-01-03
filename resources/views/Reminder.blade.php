<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder List</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2>Reminder List</h2>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Event Name</th>
            <th>Frequency</th>
            <th>Duration</th>
            <th>Time</th>
            <th>Reminder Type</th>
        </tr>
        </thead>
        <tbody>
        @forelse($reminders as $reminder)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $reminder->event_name }}</td>
                <td>{{ $reminder->frequency }}</td>
                <td>{{ $reminder->duration }} minutes</td>
                <td>{{ $reminder->time }}</td>
                <td>{{ $reminder->reminder }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No reminders found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>
</body>
</html>
