<?php

namespace App\Http\Controllers;

// Import Model Post
use App\Models\Post;
// Return type View
use Illuminate\View\View;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(): View
    {
        // get post
        $posts = Post::latest()->paginate(5);

        // render view with post
        return view('posts.index', compact('posts'));
    }
}
