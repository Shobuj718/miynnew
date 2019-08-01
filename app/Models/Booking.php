<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Notifications\Notifiable;

class Booking extends Model
{
    use SoftDeletes;
    use Notifiable;
    
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
