<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Available_time;
use App\Models\Patient;
use App\Models\Specialist;
use App\Models\Type_appointment;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Schedule_apointmentController extends Controller
{
    public function index(){
        $patients=Patient::all();
        $specialists=Specialist::all();
        $type_appointments=Type_appointment::all();
        $available_times=Available_time::all();
        //el envio de informacion lo hace a traves de javascript
        return view('app.appointment.shedule.index', compact('patients', 'specialists', 'type_appointments', 'available_times'));
    }

    public function store(Request $request)
    {
        //validaciones
        $campos = [
            'start' => 'required|unique:appointments',
            'end' => 'required|unique:appointments',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //sentencia
        $evento=Appointment::create($request->all());
    }

    public function show()
    {
        //muestra todos los registros
        $appointment=Appointment::all();
        //devuelve el formato en json
        return response()->json($appointment);
    }

    public function edit($id)
    {
        //sentencia consulta por id
        $appointment=Appointment::find($id);

        //cambio de formato de fecha y hora a solo fecha
        //$event->start=Carbon::createFromFormat('Y-m-d H:i:s', $event-> start)->format('Y-m-d');
        //$event->end=Carbon::createFromFormat('Y-m-d H:i:s', $event-> end)->format('Y-m-d');
        //devuelve la sentencia en json
        return response()->json($appointment);
    }

    public function update(Request $request, $id )
    {
        //validar informacion
        //validaciones
        $campos = [
            'start' => ['required', Rule::unique('appointments')->ignore($id)],
            'end' => ['required', Rule::unique('appointments')->ignore($id)],
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        $appointment=Appointment::find($id)->update($request->all());
        return response()->json($appointment);
    }

    public function destroy($id)
    {
        //eliminar todos los datos por id
        $appointment = Appointment::find($id)->delete();
        //devuelve la sentencia en json
        return response()->json($appointment);
    }
}
