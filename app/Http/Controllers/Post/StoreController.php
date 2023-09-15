<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $tegs = $data['teg'];
        unset($data['teg']);


        $post = Post::firstOrCreate($data);
        $post->tegs()->attach($tegs);

        return redirect()->route('posts.index');
    }

}

