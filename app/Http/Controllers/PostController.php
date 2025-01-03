<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use App\Models\Like;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('user', 'likes', 'comments')->latest()->get();
        return view('forum', compact('posts'));
    }

    public function store(Request $request)
    {
        $request->validate(['content' => 'required|string|max:255']);
        $post = Post::create([
            'user_id' => auth()->id(),
            'content' => $request->content,
        ]);
        return response()->json($post, 201);
    }

    public function like(Post $post)
    {
        $like = Like::where('post_id', $post->id)->where('user_id', auth()->id())->first();
        if ($like) {
            $like->delete();
            return response()->json(['message' => 'Like removed']);
        }

        Like::create(['post_id' => $post->id, 'user_id' => auth()->id()]);
        return response()->json(['message' => 'Liked']);
    }

    public function comment(Post $post, Request $request)
    {
        $request->validate(['content' => 'required|string|max:255']);
        $comment = Comment::create([
            'user_id' => auth()->id(),
            'post_id' => $post->id,
            'content' => $request->content,
        ]);
        return response()->json($comment, 201);
    }
}
