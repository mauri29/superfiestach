<?php

namespace App\Models;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
	protected $table = 'statuses';
	
	protected $fillable = [
		'body'
	];

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}

	public function channel()
	{
		return $this->belongsTo('App\Models\Channel', 'user_id');
	}

	public function scopeNotReply($query)
	{
		return $query->whereNull('parent_id');
	}

	public function replies()
	{
		return $this->hasMany('App\Models\Status', 'parent_id');
	}

	public function likees()
	{
		return $this->morphMany('App\Models\Likee', 'likeeable');
	}

	public function getCreatedAtAttribute($date)
    {
    	return new Date($date);
    }

}









