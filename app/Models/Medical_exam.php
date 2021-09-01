<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical_exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'symptom',
        'diagnosis',
        'reason_consultation',
        'pharmacological',
        'sc_vl_od',
        'sc_vp_od',
        'cc_vl_od',
        'cc_vp_od',
        'ph_od',
        'lensometria_od',
        'sc_vl_oi',
        'sc_vp_oi',
        'cc_vl_oi',
        'cc_vp_oi',
        'ph_oi',
        'lensometria_oi',
        'sc_vl_ao',
        'sc_vp_ao',
        'cc_vl_ao',
        'cc_vp_ao',
        'ph_ao',
        'lensometria_ao',
        'keratometry',
        'biomicroscopy',
        'motor_test',
        'exam_bottom_eye',
        'retinoscopia_od',
        'afinacion_od',
        'agudeza_vis_od',
        'retinoscopia_oi',
        'afinacion_oi',
        'agudeza_vis_oi',
        'ciclopejia',
        'addiction',
        'pupillary_distance',
        'conduct',
        'control',
        'medicine',
        'diagnostic_exam_support_rem',
        'identification_origen_disease_accident',
        'appointments_id',
        'medical_histories_id',
    ];
}
