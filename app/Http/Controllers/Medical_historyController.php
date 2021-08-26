<?php

namespace App\Http\Controllers;

use App\Models\Medical_exam;
use App\Models\Medical_history;
use App\Models\Patient;
use Illuminate\Http\Request;

class Medical_historyController extends Controller
{

    public function index(){
        $histories= Medical_history::all();
        return view('app.medical.medical_history.index', compact('histories'));
    }

    public function create(){
        $patients = Patient::all();

        return view('app.medical.medical_history.create', compact('patients'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [

        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $history = Medical_history::create($request -> all());
        return redirect('clinical/historial-medico')->with('crear', 'ok');
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
