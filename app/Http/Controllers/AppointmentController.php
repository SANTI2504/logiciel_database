<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use App\Models\Available_time;
use App\Models\Patient;
use App\Models\Specialist;
use App\Models\Type_appointment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AppointmentController extends Controller
{
    public function index(){
        $appointments = Appointment::all();
        return view('app.appointment.index', compact('appointments'));
    }

    public function create(){
        $patients=Patient::all();
        $specialists=Specialist::all();
        $type_appointments=Type_appointment::all();
        $available_times=Available_time::all();

        return view('app.appointment.create', compact('patients', 'specialists', 'type_appointments', 'available_times'));
    }

    public function store(Request $request){

        $start = $request -> date . ' ' . $request ->time;

        //validaciones
        $campos = [
            'time' => 'required',
            'date' => 'required',
            'type_appointments_id' => 'required',
            'specialists_id' => 'required',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //$time =  Carbon::createFromFormat('Y-m-d H:i:s',  $input['start'])->format('H:i:s');
        //$date =  Carbon::createFromFormat('Y-m-d H:i:s',  $input['start'])->format('Y-m-d');

        //sentencia

        $appointment = Appointment::create([
            'date' => $request -> date,
            'time' => $request -> time,
            'start' => $start,
            'end' => $start,
            'title' => $request -> title,
            'type_appointments_id' => $request -> type_appointments_id,
            'specialists_id' => $request -> specialists_id,
            'patients_id' => $request -> patients_id,
        ]);

        //$appointment = Appointment::create($request -> all());

        return redirect('agendar-citas')->with('crear', 'ok');
    }
    public function edit($appointment){
        $appointment = Appointment::find($appointment);
        $patients=Patient::all();
        $specialists=Specialist::all();
        $type_appointments=Type_appointment::all();
        $available_times=Available_time::all();
        return view('app.appointment.edit', compact('appointment', 'patients', 'specialists', 'type_appointments', 'available_times'));

    }

    public function update(Request $request, $appointment){

        $start = $request -> date . ' ' . $request ->time;

        //validaciones
        $campos = [
            'time' => 'required',
            'date' => 'required',
            'type_appointments_id' => 'required',
            'specialists_id' => 'required',
        ];
        $mensaje = [
            // aca puede generar mensajes unicos
        ];
        $this->validate($request, $campos, $mensaje);

        //$time =  Carbon::createFromFormat('Y-m-d H:i:s',  $input['start'])->format('H:i:s');
        //$date =  Carbon::createFromFormat('Y-m-d H:i:s',  $input['start'])->format('Y-m-d');

        //sentencia

        $appointment = Appointment::find($appointment)->update([
            'date' => $request -> date,
            'time' => $request -> time,
            'start' => $start,
            'end' => $start,
            'title' => $request -> title,
            'type_appointments_id' => $request -> type_appointments_id,
            'specialists_id' => $request -> specialists_id,
            'patients_id' => $request -> patients_id,
        ]);

        return redirect('agendar-citas')->with('actualizar', 'ok');
    }
    public function show($appointment){
        $appointment = Appointment::find($appointment);
        return view('app.appointment.show', compact('appointment'));
    }

    public function destroy($appointment){
        $appointment = Appointment::find($appointment)->delete();
        return redirect('agendar-citas')->with('eliminar', 'ok');
    }

}
