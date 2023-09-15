<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Teg;

class CreateController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $tegs = Teg::all();
        return view('post.create', compact('categories', 'tegs'));

    }

}

