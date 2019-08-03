<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{

	use SoftDeletes;

	protected $fillable = ['user_id', 'business_id', 'calendar_setting_id', 'category_id', 'name', 'fee', 'description', 'duration_hours', 'duration_minutes'];

    public function booking(){
        return $this->hasOne(Booking::class);
    }
}
