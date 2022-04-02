<?php

namespace App\Http\Controllers;

use App\Models\Available_time;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Available_timeController extends Controller
{
    public function index(){
        $available_times = Available_time::all();
        return view('app.appointment.available_time.index', compact('available_times'));
    }

    public function create(){
        return view('app.appointment.available_time.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'time' => ['required',Rule::unique('available_times')],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $available_time = Available_time::create($request -> all());
        return redirect('citas/tiempo')->with('crear', 'ok');
    }

    public function destroy($available_time){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $available_time = Available_time::find($available_time)->delete();

        return redirect('citas/tiempo')->with('eliminar', 'ok');

    }

    public function edit($available_time){
        $available_time=Available_time::find($available_time);

        return view('app.appointment.available_time.edit', compact('available_time'));
    }

    public function update(Request $request, $available_time){
        //validaciones
        $campos = [
            'time' => ['required',Rule::unique('available_times')->ignore($available_time)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $available_time=Available_time::find($available_time)->update($request->all());
        return redirect('citas/tiempo')->with('actualizar', 'ok');

    }
}
