<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    public function user(){
    	$this->belongsTo(User::class);
    }
}
