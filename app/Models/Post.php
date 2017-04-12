<?php

namespace App\Models;

use Jenssegers\Date\Date;
use App\Models\Tag;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //use DatesTranslator;
    protected $fillable = [
    	'title',
    	'weight',
    	'price',
    	'slug',
    	'teaser',
    	'body',
    	'image',
        'imga',
        'descra',
        'imgb',
        'descrb',
        'imgc',
        'descrc',
        'imgd',
        'descrd',
        'imge',
        'descre',
        'live',                               
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function scopeLatestFirst($query)
    {
        return $query->orderBy('created_at', 'desc');
    }

    public function scopeIsLive($query)
    {
        return $query->where('live', true);
    }

    public function producto()
    {
    	return $this->belongsTo(Product::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
    
    public function getCreatedAtAttribute($date)
    {
        return new Date($date);
    }    
    public function getUpdatedAtAttribute($date)
    {
        return new Date($date);
    }
    
}
