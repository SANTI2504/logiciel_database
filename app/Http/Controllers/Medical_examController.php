<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Medical_exam;
use App\Models\Medical_history;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Medical_examController extends Controller
{
    public function index($id){
        $name= Medical_history::find($id);
        $exams= Medical_exam::all()->where('medical_histories_id', '=', $id);
        return view('app.medical.medical_exam.index', compact('exams', 'name'));
    }

    public function create($id_historial){

        $history = Medical_history::find($id_historial);
        $appointments = Appointment::orderby('id','desc')->paginate('')
            ->where('patients_id', '=', $history->patient->id);

        return view('app.medical.medical_exam.create', compact('history', 'appointments'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'reason_consultation'=>'required|string|max:250',
            'appointments_id'=>[ 'required', Rule::unique('medical_exams')],
            'symptom'=>'required|string|max:250',
            'diagnosis'=>'required|string|max:250',
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
    public function edit($id){
        $history = Medical_history::find($id);
        return view('app.medical.medical_history.edit', compact('history'));
    }

    public function update(Request $request, $id){
        //validaciones
        $campos = [

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        $history = Medical_history::find($id)->update($request->all());
        return redirect('clinical/historial_medico')->with('actualizar', 'ok');
    }
    public function show($id){
        $exam = Medical_exam::find($id);
        return view('app.medical.medical_exam.show', compact('exam'));
    }

    public function destroy($id){
        $history = Medical_history::find($id)->delete();
        return redirect('clinical/historial_medico')->with('eliminar', 'ok');
    }
}
