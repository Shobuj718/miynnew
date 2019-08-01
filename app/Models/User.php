<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'slug',
        'role_id', 
        'category_id', 
        'business_id', 
        'first_name', 
        'last_name', 
        'phone', 
        'email', 
        'email_verified_at',
        'password', 
        'professional_title', 
        'color',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function business(){
        return $this->hasOne(Business::class);
    }

    public function contact_info(){
        return $this->hasOne(ContactInfo::class);
    }

}
