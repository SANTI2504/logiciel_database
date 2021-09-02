<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'type_appointments_id',
        'specialists_id',
        'patients_id',
    ];

    public function Specialist()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Specialist::class, 'specialists_id');

    }
}
