<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->paginate(20);
        return inertia('Home', [
            'posts' => $posts
        ]);
    }
}
