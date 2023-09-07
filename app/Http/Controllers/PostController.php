<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::all();
        foreach ($posts as $i){
            dump($i->title);
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
}

