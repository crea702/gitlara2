<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ContatsController extends Controller
{
    public function index(){

        return view('contacts');

    }

}

