<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reminder List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2>Reminder List</h2>
    <a href="{{ route('reminders.create') }}" class="btn btn-primary mb-3">Add Reminder</a>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>#</th>
            <th>Event Name</th>
            <th>Frequency</th>
            <th>Duration</th>
            <th>Time</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @forelse($reminders as $reminder)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $reminder->event_name }}</td>
                <td>
                    @if($reminder->frequency == 'seminggu')
                        Seminggu
                    @elseif($reminder->frequency == 'sebulan')
                        Sebulan
                    @elseif($reminder->frequency == 'perhari')
                        Per Hari
                    @else
                        {{ $reminder->frequency }}
                    @endif
                </td>
                <td>{{ $reminder->duration }} minutes</td>
                <td>{{ $reminder->time }}</td>
                <td>
                    <a href="{{ route('reminders.edit', $reminder) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('reminders.destroy', $reminder) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6" class="text-center">No reminders found.</td>
            </tr>
        @endforelse
        </tbody>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
