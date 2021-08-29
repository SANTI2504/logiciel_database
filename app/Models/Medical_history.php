<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_history extends Model
{
    use HasFactory;
    protected $fillable = [
        'count_exams',
        'last_diagnosis',
        'personal_history',
        'family_history',
        'surgical_history',
        'patients_id',

    ];

    //eloquent relacion uno a muchos
    public function Patient()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Patient::class, 'patients_id');

    }
}
