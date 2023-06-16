<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(Request $request) {

        $limit = $request->input('limit') ?? 10;
        $page = $request->input('page') ?? 1;

        $offset = $limit * ($page - 1);

        $posts = Post::query()
        // ->offset($offset)
        // ->take($limit)
        ->where('id', 5)
        ->paginate($limit);

        return view('blog.index', compact('posts'));
    }

    public function show() {

        
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum <strong> dolor </strong> sit amet consectetur adipisicing elit. Non, fugiat.',
        ];

        return view('blog.show', compact('post'));
    }

    public function like () {

    }
}
