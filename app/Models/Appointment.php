<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'start',
        'end',
        'title',
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

    public function Patient()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Patient::class, 'patients_id');
    }

    public function Type_appointment()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Type_appointment::class, 'type_appointments_id');
    }
}
