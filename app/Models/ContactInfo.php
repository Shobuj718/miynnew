<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ContactInfo extends Model
{
	use SoftDeletes;
	
    public function country(){
        return $this->belongsTo(Country::class);
    }

    public function phoneNumber() {
        return $this->country->dialing_code.$this->phone;
    }
}
