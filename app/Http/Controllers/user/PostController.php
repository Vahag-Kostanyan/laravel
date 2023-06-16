<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StorePostRequest;
use App\Models\Currency;
use App\Models\Post;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{

    public function index(Request $request)
    {
        $limit = $request->input('limit') ?? 10;
        $page = $request->input('page') ?? 1;

        $offset = $limit * ($page - 1);

        $posts = Post::query()
        // ->offset($offset)
        // ->take($limit)
        ->paginate($limit);

        return view('user.post.index', compact('posts'));
    }

    private function generateRandomString(int $length = 10): string {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';
    
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }
    
        return $randomString;
    }

    

    public function show(Post $id)
    {
        $post = $id;

        return view('user.post.show', compact('post'));
    }

    public function create()
    {
        return view('user.post.create');
    }

    public function store(Request $request)
    {
        $validate = validate($request->all(), Post::getValidateRules());

        $post = Post::query()->firstOrCreate([
            'user_id' => User::query()->value('id'),
            'title' => $validate['title'],
            'content' => $validate['content'],
            'published_at' => new Carbon($validate['published_at'] ?? null),
            'published' => $validate['published'] ?? false,
        ]);

        dd($post->toArray());
    }

    public function edit($id)
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum <strong> dolor </strong> sit amet consectetur adipisicing elit. Non, fugiat.',
        ];

        return view('user.post.edit', compact('post'));
    }

    public function update(Request $request)
    {
        $validate = validate($request->all(), Post::getValidateRules());
        dd($validate);

        dd($request->all());
        return view('user.post.update');
    }

    public function delete()
    {
    }

    public function like()
    {
    }
}
