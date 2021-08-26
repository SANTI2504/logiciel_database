<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'exam_date',
        'symptom',
        'diagnosis',
        'appointments_id',
        'medical_histories_id'
    ];
}
