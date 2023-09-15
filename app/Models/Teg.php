<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teg extends Model
{
    use HasFactory;

    protected $guarded = false;

    public function posts(){
        return $this->belongsToMany(Post::class);
    }
}
