<?php

namespace App\Http\Controllers;

use App\Models\Eps;
use App\Models\Type_document;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'desc')->paginate(8);
        return view('app.user.index', compact('users'));
    }

    public function create(){
        $type_documents = Type_document::all();
        $roles_id = Role::all();
        $eps_id = Eps::all();
        return view('app.user.create', compact('type_documents', 'roles_id','eps_id'));
    }

    public function store(Request $request){
        //incriptar la contraseña eviada por usuario
        $request['password'] = Hash::make($request['password']);

        $user = User::create($request -> all());
        $user->assignRole($request['roles_id']);
        return redirect('usuarios');

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

