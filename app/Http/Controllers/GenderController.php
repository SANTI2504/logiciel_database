<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class GenderController extends Controller
{
    public function index(){
        $genders = Gender::all();
        return view('app.user.gender.index', compact('genders'));
    }
    public function create(){
        return view('app.user.gender.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('genders')],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $gender = Gender::create($request -> all());
        return redirect('usuarios/generos')->with('crear', 'ok');
    }

    public function destroy($genero){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $gender = Gender::find($genero)->delete();

        return redirect('usuarios/generos')->with('eliminar', 'ok');

    }

    public function edit($genero){
        $gender=Gender::find($genero);

        return view('app.user.gender.edit', compact('gender'));
    }

    public function update(Request $request, $genero){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('genders')->ignore($genero)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $gender=Gender::find($genero)->update($request->all());
        return redirect('usuarios/generos')->with('actualizar', 'ok');

    }
}
