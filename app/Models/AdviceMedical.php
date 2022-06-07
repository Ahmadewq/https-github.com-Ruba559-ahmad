<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdviceMedical extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id', 'clinic_id' , 'description' , 'reply'
    ];


    public function user()
    {
        return $this->belongsTo(User::class , 'patient_id');
    }

    public function clinic()
    {
        return $this->belongsTo(User::class , 'clinic_id');
    }
}
