<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profession extends Model
{
    use SoftDeletes;

    protected $fillable = ['slug', 'industry_id', 'name'];

	public function industry(){
		return $this->belongsTo(Industry::class);
	}

}
