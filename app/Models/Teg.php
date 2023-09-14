<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teg extends Model
{
    use HasFactory;

    public function posts(){
        return $this->belongsToMany(Post::class, 'post_tegs', 'teg_id', 'post_id');
    }
}
