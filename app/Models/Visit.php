<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'doctor_name', 'patient_id' , 'visite_date' , 'diagnosis'
    ];


    public function user()
    {
        return $this->belongsTo(User::class , 'patient_id');
    }
}
