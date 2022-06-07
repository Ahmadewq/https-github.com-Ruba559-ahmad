<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Clinic extends Authenticatable
{
    use HasFactory;

    protected $guard = 'clinic';

    protected $fillable = [
        'name', 'doctor_name' , 'password' , 'phone' , 'email' , 'address'
    ];
}
