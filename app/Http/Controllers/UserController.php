<?php

namespace App\Http\Controllers;

use App\Actions\Fortify\PasswordValidationRules;
use App\Models\Eps;
use App\Models\Type_document;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    use PasswordValidationRules;
    public function index(){
        $users = User::orderBy('id', 'desc')->paginate(1);
        return view('app.user.index', compact('users'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.create', compact('type_documents', 'roles_id','eps_id'));
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

        $user = User::create($request -> all());
        $user->assignRole($request['roles_id']);
        return redirect('usuarios')->with('crear', 'ok');

    }
    public function show($usuario){

    }

    public function edit($usuario){

    }

    public function update(Request $request , $usuario){

    }
    public function destroy($usuario){

    }

}

