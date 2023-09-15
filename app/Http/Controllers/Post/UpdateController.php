<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(Post $post)
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

}

