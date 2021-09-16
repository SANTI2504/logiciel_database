<?php

namespace App\Http\Controllers;


use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function index(){
        //el envio de informacion lo hace a traves de javascript
        return view('app.appointment.index');
    }
}
