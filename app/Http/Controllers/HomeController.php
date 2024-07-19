<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $posts = Post::query()->latest()->paginate(20);
        return inertia('Home', [
            'posts' => PostResource::collection($posts)
        ]);
    }
}
