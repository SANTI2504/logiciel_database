<?php

namespace Database\Seeders;

use App\Models\Medical_exam;
use Illuminate\Database\Seeder;

class Medical_examsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medical_exam::create([
            'symptom'=>'dificultada para ver',
            'diagnosis'=>'Miopia',
            'reason_consultation'=>'Cambio de gafas',
            'pharmacological'=>'Gotas resecamiento',
            'sc_vl_od'=>'20/50',
            'sc_vp_od'=>'',
            'cc_vl_od'=>'20/50',
            'cc_vp_od'=>'',
            'ph_od'=>'',
            'lensometria_od'=>'+300-275x0',
            'sc_vl_oi'=>'20/50',
            'sc_vp_oi'=>'',
            'cc_vl_oi'=>'20/50',
            'cc_vp_oi'=>'',
            'ph_oi'=>'',
            'lensometria_oi'=>'+200-275x0',
            'sc_vl_ao'=>'20/50',
            'sc_vp_ao'=>'',
            'cc_vl_ao'=>'20/50',
            'cc_vp_ao'=>'',
            'ph_ao'=>'',
            'lensometria_ao'=>'',
            'keratometry'=>'OD 4400/4800 X 0 OI 4500/4875 X 0',
            'biomicroscopy'=>'',
            'motor_test'=>'',
            'retinoscopia_od'=>'+400 -400 X 0',
            'afinacion_od'=>'+300 -350 X 0',
            'agudeza_vis_od'=>'20/25',
            'retinoscopia_oi'=>'+250 -350 X 0',
            'afinacion_oi'=>'+200 -250 X 0',
            'agudeza_vis_oi'=>'20/25',
            'ciclopejia'=>'',
            'addiction'=>'',
            'pupillary_distance'=>'64mm',
            'conduct'=>'Kenaier c/12h',
            'control'=>'1 año',
            'medicine'=>'',
            'diagnostic_exam_support_rem'=>'',
            'identification_origen_disease_accident'=>'Enfermedad general o comun',
            'appointments_id'=>'1',
            'medical_histories_id'=>'1',
        ]);
        Medical_exam::create([
            'symptom'=>'dificultada para ver',
            'diagnosis'=>'Astigmatismo',
            'reason_consultation'=>'Gafas nuevas',
            'pharmacological'=>'',
            'sc_vl_od'=>'20/50',
            'sc_vp_od'=>'',
            'cc_vl_od'=>'20/50',
            'cc_vp_od'=>'',
            'ph_od'=>'',
            'lensometria_od'=>'+300-275x0',
            'sc_vl_oi'=>'20/50',
            'sc_vp_oi'=>'',
            'cc_vl_oi'=>'20/50',
            'cc_vp_oi'=>'',
            'ph_oi'=>'',
            'lensometria_oi'=>'+200-275x0',
            'sc_vl_ao'=>'20/50',
            'sc_vp_ao'=>'',
            'cc_vl_ao'=>'20/50',
            'cc_vp_ao'=>'',
            'ph_ao'=>'',
            'lensometria_ao'=>'',
            'keratometry'=>'OD 4400/4800 X 0 OI 4500/4875 X 0',
            'biomicroscopy'=>'',
            'motor_test'=>'',
            'retinoscopia_od'=>'+400 -400 X 0',
            'afinacion_od'=>'+300 -350 X 0',
            'agudeza_vis_od'=>'20/25',
            'retinoscopia_oi'=>'+250 -350 X 0',
            'afinacion_oi'=>'+200 -250 X 0',
            'agudeza_vis_oi'=>'20/25',
            'ciclopejia'=>'',
            'addiction'=>'',
            'pupillary_distance'=>'64mm',
            'conduct'=>'Kenaier c/12h',
            'control'=>'1 año',
            'medicine'=>'',
            'diagnostic_exam_support_rem'=>'',
            'identification_origen_disease_accident'=>'Accidente de trabajo',
            'appointments_id'=>'2',
            'medical_histories_id'=>'2',
        ]);
    }
}
