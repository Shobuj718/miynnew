<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Business extends Model
{

    use SoftDeletes;

    protected $fillable = ['slug', 'user_id', 'industry_id', 'profession_id', 'secret_key', 'name'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function industry(){
        return $this->belongsTo(Industry::class);
    }

    public function profession(){
        return $this->belongsTo(Profession::class);
    }

    public function categories(){
        return $this->hasMany(Category::class);
    }

    public function staffs(){
        return $this->hasMany(User::class);
    }

    public function services(){
        return $this->hasMany(Service::class);
    }
}
