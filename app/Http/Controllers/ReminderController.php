<?php

namespace App\Http\Controllers;

use App\Models\Reminder;
use Illuminate\Http\Request;

class ReminderController extends Controller
{
    public function index()
    {
        $reminders = Reminder::all();
        return view('reminders.index', compact('reminders'));
    }

    public function create()
    {
        return view('reminders.create');
    }

// app/Http/Controllers/ReminderController.php
public function store(Request $request)
{
    // Validasi input
    $validated = $request->validate([
        'event_name' => 'required|string|max:255',
        'frequency' => 'required|string',
        'duration' => 'required|integer',
        'time' => 'required|date_format:H:i',  // Gunakan date_format untuk validasi waktu
    ]);

    // Simpan data ke database
    Reminder::create([
        'event_name' => $validated['event_name'],
        'frequency' => $validated['frequency'],
        'duration' => $validated['duration'],
        'time' => $validated['time'],
    ]);

    // Redirect atau response
    return redirect()->route('reminders.index')->with('success', 'Reminder berhasil ditambahkan!');
}

    public function edit(Reminder $reminder)
    {
        return view('reminders.edit', compact('reminder'));
    }

    public function update(Request $request, Reminder $reminder)
    {
        $validated = $request->validate([
            'event_name' => 'required|string|max:255',
            'frequency' => 'required|string',
            'duration' => 'required|integer',
            'time' => 'required',
            'reminder_type' => 'required|string',
        ]);

        $reminder->update($validated);
        return redirect()->route('reminders.index')->with('success', 'Reminder updated successfully.');
    }

    public function destroy(Reminder $reminder)
    {
        $reminder->delete();
        return redirect()->route('reminders.index')->with('success', 'Reminder deleted successfully.');
    }
}
