<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = false;

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function tegs(){
        return $this->belongsToMany(Teg::class);
    }
}
