<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicalExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medical_exams', function (Blueprint $table) {
            $table->id();
            $table->string('symptom', 500);
            $table->string('diagnosis', 500);
            $table->string('reason_consultation', 45)->nullable();
            $table->string('pharmacological', 45)->nullable();
            // examen agudez visual
            $table->string('sc_vl_od', 45)->nullable(); //sin correccion vision lejana ojo derecho
            $table->string('sc_vp_od', 45)->nullable(); //sin correcion vision proxima ojo derecho
            $table->string('cc_vl_od', 45)->nullable(); //con correccion vision lejana ojo derecho
            $table->string('cc_vp_od', 45)->nullable(); //con correccion vision proxima ojo derecho
            $table->string('ph_od', 45)->nullable(); //ph ojo derecho
            $table->string('lensometria_od', 45)->nullable(); //ojo derecho
            $table->string('sc_vl_oi', 45)->nullable(); //sin correccion vision lejana ojo izquierdo
            $table->string('sc_vp_oi', 45)->nullable(); //sin correcion vision proxima ojo izquierdo
            $table->string('cc_vl_oi', 45)->nullable(); //con correccion vision lejana ojo izquierdo
            $table->string('cc_vp_oi', 45)->nullable(); //con correccion vision proxima ojo izquierdo
            $table->string('ph_oi', 45)->nullable(); //ph ojo izquierdo
            $table->string('lensometria_oi', 45)->nullable(); //ojo izquierdo
            $table->string('sc_vl_ao', 45)->nullable(); //sin correccion vision lejana ambos ojos
            $table->string('sc_vp_ao', 45)->nullable(); //sin correcion vision proxima ambos ojos
            $table->string('cc_vl_ao', 45)->nullable(); //con correccion vision lejana ambos ojos
            $table->string('cc_vp_ao', 45)->nullable(); //con correccion vision proxima ambos ojos
            $table->string('ph_ao', 45)->nullable(); //ambos ojos ph
            $table->string('lensometria_ao', 45)->nullable(); //ambos ojos
            // end:  examen agudez visual
            $table->string('keratometry', 45)->nullable(); //queratometria
            $table->string('biomicroscopy', 45)->nullable(); //biomicroscopia
            $table->string('motor_test', 45)->nullable(); //examen_motor
            $table->string('exam_bottom_eye', 45)->nullable(); //examen fondo de ojos
            //Examen de refraccion
            $table->string('retinoscopia_od', 45)->nullable(); //ojo derecho
            $table->string('afinacion_od', 45)->nullable(); //ojo derecho
            $table->string('agudeza_vis_od', 45)->nullable(); //ojo derecho
            $table->string('retinoscopia_oi', 45)->nullable(); //ojo izquierdo
            $table->string('afinacion_oi', 45)->nullable(); //ojo izquierdo
            $table->string('agudeza_vis_oi', 45)->nullable(); //ojo izquierdo
            //end: Examen de refraccion
            $table->string('ciclopejia', 45)->nullable(); //ciclopejia
            $table->string('addiction', 45)->nullable(); //adiccion
            $table->string('pupillary_distance', 45)->nullable(); //distancia_pupilar
            $table->string('conduct', 45)->nullable(); //conducta
            $table->string('control', 45)->nullable(); //control
            $table->string('medicine', 45)->nullable(); //medicamento
            $table->string('diagnostic_exam_support_rem', 45)->nullable(); //examen diagnostico y/o remisiones
            $table->string('identification_origen_disease_accident', 45)->nullable(); //Idenficacion origen enfermedad accidente

            $table->bigInteger('appointments_id')->unsigned()->nullable();
            $table->bigInteger('medical_histories_id')->unsigned();
            $table->foreign('appointments_id')->references('id')->on('appointments');
            $table->foreign('medical_histories_id')->references('id')->on('medical_histories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medical_exams');
    }
}
