<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Eps;
use App\Models\Specialist;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;

class SpecialistController extends Controller
{
    use PasswordValidationRules;
    public function index(){
        $specialists = Specialist::all();
        return view('app.user.type_users.specialist.index', compact('specialists'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.specialist.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => 'required|int|unique:auxiliaries',
            'email' => 'required|email|max:145|unique:auxiliaries',
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
        $specialist = Specialist::create($request -> all());
        return redirect('usuarios/especialistas')->with('crear', 'ok');
    }
    public function edit($especialista){
        $specialist = Specialist::find($especialista);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.specialist.edit', compact('specialist', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $especialista){

        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => [ 'required', 'int', Rule::unique('specialists')->ignore($especialista)],
            'email' => ['required','email','max:145',Rule::unique('specialists')->ignore($especialista)],
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
        $specialist = Specialist::find($especialista)->update($request->all());
        return redirect('usuarios/especialistas')->with('actualizar', 'ok');
    }
    public function show($especialista){
        $specialist = Specialist::find($especialista);
        return view('app.user.type_users.specialist.show', compact('specialist'));
    }

    public function destroy($especialista){
        $specialist = Specialist::find($especialista)->delete();
        return redirect('usuarios/especialistas')->with('eliminar', 'ok');
    }
}
