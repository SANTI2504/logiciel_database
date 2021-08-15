<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Eps;
use App\Models\Auxiliary;
use App\Models\Type_document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;


class AuxiliaryController extends Controller
{
    use PasswordValidationRules;

    public function index(){
        $auxiliaries = Auxiliary::orderBy('id', 'desc')->paginate(8);
        return view('app.user.type_users.auxiliary.index', compact('auxiliaries'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.auxiliary.create', compact('type_documents', 'roles_id','eps_id'));
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
        $auxiliary = Auxiliary::create($request -> all());
        return redirect('usuarios/auxiliares')->with('crear', 'ok');
    }
    public function edit($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare);
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.type_users.auxiliary.edit', compact('auxiliary', 'type_documents', 'roles_id','eps_id'));
    }

    public function update(Request $request, $auxiliare){
        //validaciones
        $campos = [
            'name' => 'required|string|max:125',
            'lastnames' => 'required|string|max:45',
            'number_document' => [ 'required', 'int', Rule::unique('auxiliaries')->ignore($auxiliare)],
            'email' => ['required','email','max:145',Rule::unique('auxiliaries')->ignore($auxiliare)],
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
        $auxiliary = Auxiliary::find($auxiliare)->update($request->all());
        return redirect('usuarios/auxiliares')->with('actualizar', 'ok');
    }
    public function show($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare);
        return view('app.user.type_users.auxiliary.show', compact('auxiliary'));
    }

    public function destroy($auxiliare){
        $auxiliary = Auxiliary::find($auxiliare)->delete();
        return redirect('usuarios/auxiliares')->with('eliminar', 'ok');
    }
}
