<?php

namespace App\Services\Post;

use App\Models\Post;

class Service
{
    public function store($data){
        $tegs = $data['teg'];
        unset($data['teg']);

        $post = Post::firstOrCreate($data);
        $post->tegs()->attach($tegs);

    }

    public function update($post, $data){
        $tegs = $data['teg'];
        unset($data['teg']);

        $post->update($data);
        $post ->tegs()->sync($tegs);

    }
    public function delete($post){
        $post->delete();
    }
}
