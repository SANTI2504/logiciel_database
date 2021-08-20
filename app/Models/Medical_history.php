<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_history extends Model
{
    use HasFactory;
    protected $fillable = [
        'amount_visits',
        'last_diagnosis',
        'last_modified_date',
        'date_create',
        'patients_id',

    ];

    //eloquent relacion uno a muchos
    public function Patient()
    {
        //belongsto('ruta del modelo a relacionar')
        return $this->belongsTo(Patient::class, 'patients_id');

    }
}
