<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['slug', 'role', 'permission'];

	public function users(){
		return $this->hasMany(User::class);
	}

}
