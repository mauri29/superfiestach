<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'imagePath',
    	'title',
    	'description',
    	'price',
    	'weight',
    	'offer',
        'slug',
    ];

    public function fullName()
    {
    	return $this->title;
    }

    public function avatar()
    {
    	return 'https://www.gravatar.com/avatar/' . md5($this->description) . '?s=60&d=mm';
    }

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
