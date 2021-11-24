<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Appointmentbooking extends Authenticatable
{
    protected $table = 'appointment_booking';
    //protected $fillable = ['id', 'role_name', 'status'];
}
