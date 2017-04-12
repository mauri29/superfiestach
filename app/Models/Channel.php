<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Channel extends Model
{
    //use Searchable;

    protected $fillable = [
        'address',
        'number',
        'post',
        'city',
        'slug',
        'name',
        'description',
        'image_filename',
    ];
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
/*
    public function videos()
    {
        return $this->hasMany(Video::class);
    }
*/
    public function getImage()
    {
        if(!$this->image_filename){
            return config('sfiestach.buckets.images') . '/profile/' . 'avatar.png';
        }
        return config('sfiestach.buckets.images') . '/profile/' . $this->image_filename;
    }

    public function feedback()
    {
        return $this->belongsTo(Feedback::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
