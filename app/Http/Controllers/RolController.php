<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Role::orderBy('id', 'desc')->paginate(8);
        return view('app.user.rol.index', compact('roles'));
    }

    public function create(){
        return view('app.user.rol.create');
    }

    public function store(Request $request){
        $rol = Role::create($request -> all());
        return redirect('usuarios/roles');
    }

    public function destroy($role){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $rol = Role::find($role)->delete();

        return redirect('usuarios/roles');

    }

    public function edit($role){
        $rol=Role::find($role);

        return view('app.user.rol.edit', compact('rol'));
    }

    public function update(Request $request, $role){
        $rol=Role::find($role)->update($request->all());

        return redirect('usuarios/roles');

    }

}
