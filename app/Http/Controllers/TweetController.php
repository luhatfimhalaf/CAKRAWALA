<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TweetController extends Controller
{
  
    public function index()
    {
      $tweets = Tweet::with('user')->get();
      $tweets = Tweet::all();
      return view('tweets.tweet-show', compact('tweets'));
    }

    public function create()
    {
        return view('tweets.tweet-create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = null;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('tweets', 'public');
        }

        Tweet::create([
            'content' => $validated['content'],
            'image_path' => $path,
        ]);

        return redirect()->route('tweets.index');
    }

    public function edit(Tweet $tweet)
    {
        return view('tweets.tweet-edit', compact('tweet'));
    }

    public function update(Request $request, Tweet $tweet)
    {
        $validated = $request->validate([
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $path = $tweet->image_path;
        if ($request->hasFile('image')) {
            if ($path) {
                Storage::disk('public')->delete($path);
            }
            $path = $request->file('image')->store('tweets', 'public');
        }

        $tweet->update([
            'content' => $validated['content'],
            'image_path' => $path,
        ]);

        return redirect()->route('tweets.index');
    }

    public function destroy(Tweet $tweet)
    {
        if ($tweet->image_path) {
            Storage::disk('public')->delete($tweet->image_path);
        }

        $tweet->delete();

        return redirect()->route('tweets.index');
    }
    public function user()
    {
      return $this->belongsTo(User::class);
    }
}
