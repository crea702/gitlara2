<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke()
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

}

