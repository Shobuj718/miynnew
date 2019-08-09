<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Industry extends Model
{
    use SoftDeletes;

    protected $fillable = ['slug', 'name'];

	public function professions(){
		return $this->hasMany(Profession::class);
	}

}
