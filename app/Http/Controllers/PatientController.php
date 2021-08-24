<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Eps;
use App\Models\Patient;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class PatientController extends Controller
{
    use PasswordValidationRules;
    public function index(){
        $patients = Patient::all();
        return view('app.user.type_users.patient.index', compact('patients'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.patient.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => 'required|int|unique:patients',
            'email' => 'required|email|max:145|unique:patients',
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

        //sentencia
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
