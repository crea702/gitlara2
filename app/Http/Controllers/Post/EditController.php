<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Teg;

class EditController extends Controller
{
    public function __invoke(Post $post)
    {
        $categories = Category::all();
        $tegs = Teg::all();
        return view('post.edit', compact('post','categories', 'tegs'));

    }

}

