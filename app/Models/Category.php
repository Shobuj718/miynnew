<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{

	use softDeletes;

	protected $fillable = ['name', 'start_date', 'expired_date'];

    public function services(){
        return $this->hasMany(Service::class);
    }
    public function booking(){
        return $this->hasOne(Booking::class);
    }
}
