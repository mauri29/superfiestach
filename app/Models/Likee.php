<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Likee extends Model
{
	protected $table = 'likeeable';

	public function likeeable()
	{
		return $this->morphTo();
	}

	public function user()
	{
		return $this->belongsTo('App\Models\User', 'user_id');
	}
}