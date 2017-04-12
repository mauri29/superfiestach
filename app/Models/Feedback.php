<?php
namespace App\Models;
use Auth;
use Illuminate\Database\Eloquent\Model;
class Feedback extends Model
{
    protected $fillable = ['body'];
    protected $appends=['likeCount', 'likedByCurrentUser', 'canBeLikedByCurrentUser'];
    public function getLikeCountAttribute()
    {   
        return $this->likes->count();
    }
    public function getLikedByCurrentUserAttribute()
    {
        if(!Auth::check()){
            return false;
        }
        return $this->likes()->where('user_id', Auth::user()->id)->count() === 1;
    }
    public function getCanBeLikedByCurrentUserAttribute()
    {
        if(!Auth::check()){
            return false;
        }
        return $this->user->id !== Auth::user()->id;        
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->morphMany(Like::class, 'likeable');
    }
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
    /**
    public function scopeLatestFirst($query)
    {
        return $query->orderBy('create', 'desc');
    }
    */
    
}