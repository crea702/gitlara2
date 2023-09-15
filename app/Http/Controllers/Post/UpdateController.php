<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\UpdateRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Post $post)
    {
        $data = $request->validated();
        $tegs = $data['teg'];
        unset($data['teg']);


        $post->update($data);
        $post ->tegs()->sync($tegs);
        return redirect()->route('posts.show', $post->id);
    }

}

