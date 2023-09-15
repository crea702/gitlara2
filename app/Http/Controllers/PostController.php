<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Teg;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('post.index', compact('posts'));

    }

    public function create()
    {
        $categories = Category::all();
        $tegs = Teg::all();
        return view('post.create', compact('categories', 'tegs'));

    }

    public function store()
    {
        $data = \request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => 'string',
            'teg' =>'array',
        ]);
        $tegs = $data['teg'];
        unset($data['teg']);


        $post = Post::firstOrCreate($data);
        $post->tegs()->attach($tegs);

        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tegs = Teg::all();
        return view('post.edit', compact('post','categories', 'tegs'));
    }


    public function update(Post $post)
    {

        $data = \request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'category_id' => 'string',
            'teg' =>'array',


        ]);
        $tegs = $data['teg'];
        unset($data['teg']);


        $post->update($data);
        $post ->tegs()->sync($tegs);
        return redirect()->route('posts.show', $post->id);
    }

    public function delete()
    {
        $post = Post::find(6);
        $post->delete();
        dd('delete');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }

    public function restore()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('$post wiht restore');

    }

    public function firstOrCreate()
    {

        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'some image',
            'likes' => 32,
            'is_published' => 1
        ];


        $post = Post::firstOrCreate([
            'title' => 'title from phpstorm',
        ],
            [
                'title' => 'some post',
                'content' => 'some content',
                'image' => 'some image',
                'likes' => 32,
                'is_published' => 1
            ]);
        dd($post->content);

    }

    public function updateOrCreate()
    {

        $anotherPost = [
            'title' => 'update some post',
            'content' => 'update some content',
            'image' => 'update some image',
            'likes' => 332,
            'is_published' => 1
        ];

        $post = Post::updateOrCreate([
            'title' => 'update some post',
        ], ['title' => 'update 1 some post',
            'content' => 'update some content',
            'image' => 'update some image',
            'likes' => 332,
            'is_published' => 1

        ]);
        dd($post->title);


    }
}

