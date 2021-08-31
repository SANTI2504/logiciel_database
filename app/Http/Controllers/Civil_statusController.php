<?php

namespace App\Http\Controllers;

use App\Models\Civil_status;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Civil_statusController extends Controller
{
    public function index(){
        $civil_statuses = Civil_status::all();
        return view('app.user.civil_status.index', compact('civil_statuses'));
    }
    public function create(){
        return view('app.user.civil_status.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('civil_statuses')],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $civil_status = Civil_status::create($request -> all());
        return redirect('usuarios/estado-civil')->with('crear', 'ok');
    }

    public function destroy($estado_civil){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $civil_status = Civil_status::find($estado_civil)->delete();

        return redirect('usuarios/estado-civil')->with('eliminar', 'ok');

    }

    public function edit($estado_civil){
        $civil_status=Civil_status::find($estado_civil);

        return view('app.user.civil_status.edit', compact('civil_status'));
    }

    public function update(Request $request, $estado_civil){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('civil_statuses')->ignore($estado_civil)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $civil_status=Civil_status::find($estado_civil)->update($request->all());
        return redirect('usuarios/estado-civil')->with('actualizar', 'ok');

    }
}
