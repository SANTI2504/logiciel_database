<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Medical_exam;
use App\Models\Medical_history;
use Illuminate\Http\Request;

class Medical_examController extends Controller
{
    public function index($id){
        $name= Medical_history::find($id);
        $exams= Medical_exam::all()->where('medical_histories_id', '=', $id);
        return view('app.medical.medical_exam.index', compact('exams', 'name'));
    }

    public function create($id_historial){
        $history = Medical_history::find($id_historial);
        $appointments = Appointment::orderby('id','desc')->paginate('')->where('patients_id', '=', $history->patient->id);

        return view('app.medical.medical_exam.create', compact('history', 'appointments'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        /*
        //actualizar el conteo
        $exams = Medical_exam::where('medical_histories_id', '=', $request['medical_histories_id'])->get();
        $count_exams =$exams->count();
        $history_update = Medical_history::find($request['medical_histories_id'])->update([
            'amount_visits' => $count_exams
        ]);
        */

        //sentencias
        $exam = Medical_exam::create($request -> all());

        return redirect('clinical/examen-medico/'.$request['medical_histories_id'])->with('crear', 'ok');
    }
    public function edit($historial_medico){
        $history = Medical_history::find($historial_medico);
        return view('app.medical.medical_history.edit', compact('history'));
    }

    public function update(Request $request, $historial_medico){
        //validaciones
        $campos = [

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        $history = Medical_history::find($historial_medico)->update($request->all());
        return redirect('clinical/historial_medico')->with('actualizar', 'ok');
    }
    public function show($historial_medico){
        $exam = Medical_exam::all()->where("medical_histories_id","=",$historial_medico);
        $history = Medical_history::find($historial_medico);
        return view('app.medical.medical_history.show', compact('history', 'exam'));
    }

    public function destroy($historial_medico){
        $history = Medical_history::find($historial_medico)->delete();
        return redirect('clinical/historial_medico')->with('eliminar', 'ok');
    }
}
