<?php

namespace App\Http\Controllers;

use App\Models\Type_appointment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Type_appointmentController extends Controller
{
    public function index(){
        $type_appointments = Type_appointment::all();
        return view('app.appointment.type_appointment.index', compact('type_appointments'));
    }

    public function create(){
        return view('app.appointment.type_appointment.create');
    }

    public function store(Request $request){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('type_appointments')],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $type_appointment = Type_appointment::create($request -> all());
        return redirect('citas/tipo-cita')->with('crear', 'ok');
    }

    public function destroy($type_appointment){
        // sql: DELETE FROM users WHERE id =?
        // consulta para eliminar todos los datos segun el parametro id
        $type_appointment = Type_appointment::find($type_appointment)->delete();

        return redirect('citas/tipo-cita')->with('eliminar', 'ok');

    }

    public function edit($type_appointment){
        $type_appointment=Type_appointment::find($type_appointment);

        return view('app.appointment.type_appointment.edit', compact('type_appointment'));
    }

    public function update(Request $request, $type_appointment){
        //validaciones
        $campos = [
            'name' => ['required','string','max:45',Rule::unique('type_appointments')->ignore($type_appointment)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $type_appointment=Type_appointment::find($type_appointment)->update($request->all());
        return redirect('citas/tipo-cita')->with('actualizar', 'ok');

    }
}
