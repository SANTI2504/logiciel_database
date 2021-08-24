<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class RolController extends Controller
{
    public function index(){
        $roles = Role::all();
        return view('app.user.rol.index', compact('roles'));
    }

    public function create(){
        return view('app.user.rol.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('roles')],
        ];
        $mensaje = [
        // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $rol = Role::create($request -> all());
        return redirect('usuarios/roles')->with('crear', 'ok');
    }

    public function destroy($role){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $rol = Role::find($role)->delete();

        return redirect('usuarios/roles')->with('eliminar', 'ok');

    }

    public function edit($role){
        $rol=Role::find($role);

        return view('app.user.rol.edit', compact('rol'));
    }

    public function update(Request $request, $role){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('roles')->ignore($role)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $rol=Role::find($role)->update($request->all());
        return redirect('usuarios/roles')->with('actualizar', 'ok');

    }

}
