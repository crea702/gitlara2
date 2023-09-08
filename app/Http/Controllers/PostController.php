<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        foreach ($posts as $i){
            dump($i->content);
        }
        dd('end');
    }

    public function create(){
        $postsArr = [
            [
                'title'=> 'title from phpstorm',
                'content'=> 'content from phpstorm',
                'image'=> 'image from phpstorm',
                'likes'=> 20,
                'is_published'=> 1
            ],
            [
                'title'=> 'title 2 of post from phpstorm',
                'content'=> 'content 2 of post from phpstorm',
                'image'=> 'image 2 of post from phpstorm',
                'likes'=> 22,
                'is_published'=> 1
            ]
        ];
        foreach ($postsArr as $item){

            Post::create($item);
        }

        dd('crete');

    }

    public function update(){
        $post = Post::find(5);


        $post -> update([
            'title'=> 'update title 2 of post from phpstorm',
            'content'=> 'update content 2 of post from phpstorm',
            'image'=> 'update image 2 of post from phpstorm',
            'likes'=> 33,
            'is_published'=> 1
        ]);
        dd('update');
    }

    public function delete(){
        $post = Post::find(6);
        $post->delete();
        dd('delete');
    }

    public function restore(){
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('$post wiht restore');

    }

    public function firstOrCreate(){

        $anotherPost = [
            'title'=> 'some post',
            'content'=> 'some content',
            'image'=> 'some image',
            'likes'=> 32,
            'is_published'=> 1
        ];


        $post = Post::firstOrCreate([
            'title'=> 'title from phpstorm',
        ],
            [
            'title'=> 'some post',
            'content'=> 'some content',
            'image'=> 'some image',
            'likes'=> 32,
            'is_published'=> 1
        ]);
        dd($post->content);

    }

    public function updateOrCreate(){

        $anotherPost = [
            'title'=> 'update some post',
            'content'=> 'update some content',
            'image'=> 'update some image',
            'likes'=> 332,
            'is_published'=> 1
        ];

        $post = Post::updateOrCreate([
            'title'=> 'update some post',
        ],['title'=> 'update 1 some post',
            'content'=> 'update some content',
            'image'=> 'update some image',
            'likes'=> 332,
            'is_published'=> 1

        ]);
        dd($post->title);


    }
}

