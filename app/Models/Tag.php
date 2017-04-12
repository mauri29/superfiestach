<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
    	return $this->morphedByMany(Post::class, 'taggable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}