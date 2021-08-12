<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\Patient;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::orderBy('id', 'desc')->paginate(8);
        return view('app.user.type_users.patient.index', compact('patients'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.patient.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $patient = Patient::create($request -> all());

        return redirect('usuarios/pacientes')->with('crear', 'ok');
    }
    public function edit($paciente){
        $patient = Patient::find($paciente);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.patient.edit', compact('patient', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $paciente){
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
