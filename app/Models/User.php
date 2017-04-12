<?php

namespace App\Models;

use App\Models\Status;
use App\Traits\DatesTranslator;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable, DatesTranslator;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'password', 'last_login', 'image_filename',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function channel()//s?
    {
        return $this->hasMany(Channel::class);
    }
   
    public function orders()
    {
        return $this->hasMany('App\Models\Order');
    }
    
/*    public function videos()
    {
        return $this->hasManyThrough(Video::class, Channel::class);
    }
*/    
    public function feedbacks()
    {
        return $this->hasMany(Feedback::class);
    }
  
    //protected $appends = ['avatar'];

    public function getImage()
    {
        if(!$this->image_filename){
            return config('sfiestach.buckets.images') . '/profile/' . 'avatar.png';
        }
        return config('sfiestach.buckets.images') . '/profile/' . $this->image_filename;
    }
    
    public function getAvatarAttribute()
    {
        if(!$this->image_filename){
            return config('sfiestach.buckets.images') . '/profile/' . 'avatar.png';
        }
        return config('sfiestach.buckets.images') . '/profile/' . $this->image_filename;
        
    }

    public function likes()
    {
        return $this->morphyMany(Like::class, 'likeable');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function statuses()
    {
        return $this->hasMany('App\Models\Status', 'user_id');
    }

    public function likees()
    {
        return $this->hasMany('App\Models\Likee', 'user_id');
    }

    public function friendsOfMine()
    {
        return $this->belongsToMany('App\Models\User', 'friends', 'user_id', 'friend_id');
    }

    public function friendOf()
    {
        return $this->belongsToMany('App\Models\User', 'friends', 'friend_id', 'user_id');
    }

    public function friends()
    {
        return $this->friendsOfMine()->wherePivot('accepted', true)->get()->merge($this->friendOf()->where('accepted', true)->get());
    }

    public function friendRequests()
    {
        return $this->friendsOfMine()->wherePivot('accepted', false)->get();
    }

    public function friendRequestsPending()
    {
        return $this->friendOf()->wherePivot('accepted', false)->get();
    }

    public function hasFriendRequestPending(User $user)
    {
        return (bool) $this->friendRequestsPending()->where('id', $user->id)->count();
    } 

    public function hasFriendRequestReceived(User $user)
    {
        return (bool) $this->friendRequests()->where('id', $user->id)->count();
    }

    public function addFriend(User $user)
    {
        $this->friendOf()->attach($user->id);
    }

    public function deleteFriend(User $user)
    {
        $this->friendOf()->detach($user->id);
        $this->friendsOfMine()->detach($user->id);
    }

    public function acceptFriendRequest(User $user)
    {
        $this->friendRequests()->where('id', $user->id)->first()->pivot->update([
            'accepted' => true,
        ]);
    }

    public function isFriendsWith(User $user)
    {
        return (bool) $this->friends()->where('id', $user->id)->count();
    }

    public function hasLikeedStatus(Status $status)
    {  
        return (bool) $status->likees->where('user_id', $this->id)->count();
    }



}
