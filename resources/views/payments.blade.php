<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payments</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="my-4">Payments</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Table to display payments -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>User</th>
                    <th>Course</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($payments as $payment)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $payment->user->name }}</td> <!-- Pastikan relasi User memiliki atribut `name` -->
                        <td>{{ $payment->course->name }}</td> <!-- Pastikan relasi Course memiliki atribut `name` -->
                        <td>{{ number_format($payment->amount, 2) }}</td>
                        <td>
                            <span class="badge {{ $payment->status === 'success' ? 'bg-success' : ($payment->status === 'failed' ? 'bg-danger' : 'bg-warning') }}">
                                {{ ucfirst($payment->status) }}
                            </span>
                        </td>
                        <td>
                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-primary btn-sm">View</a>
                            <form action="{{ route('payments.destroy', $payment->id) }}" method="POST" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No payments found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        <!-- Add New Payment Button -->
        <a href="{{ route('payments.create') }}" class="btn btn-success mt-3">Add New Payment</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
