<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Reminder</title>
    <style>
        /* General container styles */
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 30px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading styles */
        h2 {
            font-family: 'Arial', sans-serif;
            color: #2c3e50;
            font-weight: 600;
            text-align: center;
            margin-bottom: 30px;
        }

        /* Form label styling */
        .form-label {
            font-size: 14px;
            font-weight: bold;
            color: #34495e;
        }

        /* Form input styling */
        .form-control {
            border-radius: 5px;
            border: 1px solid #ced4da;
            padding: 10px;
            font-size: 16px;
            transition: border-color 0.3s ease-in-out;
            width: 100%;
        }

        /* Focused input field */
        .form-control:focus {
            border-color: #3498db;
            box-shadow: 0 0 8px rgba(52, 152, 219, 0.5);
        }

        /* Button styling */
        .btn {
            font-size: 16px;
            padding: 12px;
            border-radius: 5px;
            transition: background-color 0.3s ease-in-out;
            width: 100%;
            margin-top: 20px;
        }

        /* Button primary color */
        .btn-primary {
            background-color: #3498db;
            border-color: #3498db;
            color: white;
        }

        /* Button hover effect */
        .btn-primary:hover {
            background-color: #2980b9;
            border-color: #2980b9;
        }

        /* Margin between form groups */
        .mb-3 {
            margin-bottom: 20px;
        }

        /* Responsive styles for smaller screens */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <h2>Add Reminder</h2>
    <form action="{{ route('reminders.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="event_name" class="form-label">Event Name</label>
            <input type="text" name="event_name" class="form-control" id="event_name" required>
        </div>
        <div class="mb-3">
            <label for="frequency" class="form-label">Frequency</label>
            <select name="frequency" class="form-control" id="frequency" required>
                <option value="seminggu">Seminggu</option>
                <option value="sebulan">Sebulan</option>
                <option value="perhari">Per Hari</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="duration" class="form-label">Duration (minutes)</label>
            <input type="number" name="duration" class="form-control" id="duration" required>
        </div>
        <div class="mb-3">
            <label for="time" class="form-label">Time</label>
            <input type="time" name="time" class="form-control" id="time" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>

</body>
</html>
