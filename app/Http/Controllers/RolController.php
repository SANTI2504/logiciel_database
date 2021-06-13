<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Rol::orderBy('id', 'desc')->paginate(8);
        return view('app.user.rol.index', compact('roles'));
    }

    public function create(){
        return view('app.user.rol.create');
    }

    public function store(Request $request){
        $rol = Rol::create($request -> all());
        return redirect('usuarios/roles');
    }

    public function destroy($id){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $rol = Rol::find($id)->delete();

        return redirect('usuarios/roles');

    }

    public function edit($id){
        $rol=Rol::find($id);

        return view('app.user.rol.edit', compact('rol'));
    }

    public function update(Request $request, $id){
        $rol=Rol::find($id)->update($request->all());

        return redirect('usuarios/roles');

    }

}
