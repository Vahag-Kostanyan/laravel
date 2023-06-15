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
        $search = $request->input('search');
        $category_id = $request->input('category_id');

        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum <strong> dolor </strong> sit amet consectetur adipisicing elit. Non, fugiat.',
            'category_id' => 1
        ];

        $posts = array_fill(0, 10, $post);

        $posts = array_filter($posts, function ($post) use ($search, $category_id) {
            if ($search && !str_contains($post->title, $search)) {
                return false;
            }

            if ($category_id && $post->category_id !== $category_id) {
                return false;
            }
            return true;
        });
        return view('user.post.index', compact('posts'));
    }

    public function show()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem, ipsum <strong> dolor </strong> sit amet consectetur adipisicing elit. Non, fugiat.',
        ];

        return view('user.post.show', compact('post'));
    }

    public function create()
    {

        return view('user.post.create');
    }

    public function store(Request $request)
    {
        // $validate = validator($request->all(), [
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string'],
        // ])->validate();

        // $validate = $request->validate([
        //     'title' => ['required', 'string', 'max:100'],
        //     'content' => ['required', 'string', 'max:10000'],
        // ]);

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
