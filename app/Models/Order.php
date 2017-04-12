<?php

namespace App\Models;

use Jenssegers\Date\Date;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function user()
    {
        return $this->belongsTo(Channel::class);
    }
    public function channel()
    {
        return $this->belongsTo(Channel::class);
    }
    public function getCreatedAtAttribute($date)
    {
    	return new Date($date);
    }

}
