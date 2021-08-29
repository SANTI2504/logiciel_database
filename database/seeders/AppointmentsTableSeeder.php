<?php

namespace Database\Seeders;


use App\Models\Appointment;
use Illuminate\Database\Seeder;

class AppointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Appointment::create([
            'date' => '2021/04/15',
            'time' => '12:30:00',
            'type_appointments_id'=>'2',
            'specialists_id'=>'1',
            'patients_id'=>'1',
        ]);
        Appointment::create([
            'date' => '2021/08/20',
            'time' => '15:45:00',
            'type_appointments_id'=>'1',
            'specialists_id'=>'2',
            'patients_id'=>'2',
        ]);


    }
}
