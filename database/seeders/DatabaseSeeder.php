<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Teg;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()

    {
        Category::factory(10)->create();
        $tegs = Teg::factory(25)->create();
        $posts = Post::factory(300)->create();

        foreach ($posts as $post){
            $tegsId = $tegs->random(5)->pluck('id');
            $post->tegs()->attach($tegsId);
        }



        // \App\Models\User::factory(10)->create();
    }
}
