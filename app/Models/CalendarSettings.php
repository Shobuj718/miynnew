<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalendarSettings extends Model
{

	use SoftDeletes;
	
    public function setWeeklyOffAttribute($value)
    {
        $this->attributes['weekly_off'] = serialize($value);
    }

    public function getWeeklyOffAttribute($value)
    {
        return unserialize($value);
    }
}
