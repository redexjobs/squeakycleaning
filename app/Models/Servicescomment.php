<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Servicescomment extends Authenticatable
{
    protected $table = 'services_comment';
    //protected $fillable = ['id', 'role_name', 'status'];
	#https://www.codegrepper.com/code-examples/php/category+hierarchy+laravel
	
	public function subcomment(){

        return $this->hasMany('App\Models\Servicescomment', 'parent_id');
        //return $this->hasMany('App\Models\Servicescomment', 'parent_id')->with('subcomment');
		
    }
}
