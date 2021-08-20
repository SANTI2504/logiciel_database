<?php

namespace App\Http\Controllers;

use App\Models\Medical_history;
use App\Models\Patient;
use Illuminate\Http\Request;

class Medical_historyController extends Controller
{

    public function index(){
        $histories= Medical_history::orderBy('id', 'desc')->paginate(8);
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
        $patient = Medical_history::create($request -> all());
        return redirect('clinical/historial-medico')->with('crear', 'ok');
    }
    public function edit($paciente){
        $patient = Patient::find($paciente);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.patient.edit', compact('patient', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $paciente){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => [ 'required', 'int', Rule::unique('patients')->ignore($paciente)],
            'email' => ['required','email','max:145',Rule::unique('patients')->ignore($paciente)],
            'date_of_bird' => 'required|date',
            'password' =>  $this->passwordRules(),
            'number_cell' => 'required|int',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $patient = Patient::find($paciente)->update($request->all());
        return redirect('usuarios/pacientes')->with('actualizar', 'ok');
    }
    public function show($paciente){
        $patient = Patient::find($paciente);
        return view('app.user.type_users.patient.show', compact('patient'));
    }

    public function destroy($paciente){
        $patient = Patient::find($paciente)->delete();
        return redirect('usuarios/pacientes')->with('eliminar', 'ok');
    }
}
