<?php

namespace Database\Seeders;

use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $patient = Patient::create([
            'name'=>'Misael Andres',
            'lastnames'=> 'Piraquive Cardenas',
            'number_document'=> '1002568796',
            'email' => 'misael@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '3155896578',
            'accompanist_name'=>'Jose Gabriel Piraquive Gutierrez',
            'accompanist_cell'=>'315659625',
            'address'=>'calle 50 B N 54 56 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'1',
            'civil_status_id'=>'3',
            'type_document_id' => '1',
            'roles_id' => '2',
            'eps_id' => '3',
        ]);
        //$patient->assignRole('Paciente');

        $patient = Patient::create([
            'name'=>'Maria Camila',
            'lastnames'=> 'Rincon Quiroga',
            'number_document'=> '1036596856',
            'email' => 'maria@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '3552658964',
            'accompanist_name'=>'Miguel Angel Rincon Gutierrez',
            'accompanist_cell'=>'315659625',
            'address'=>'carrera 50 B N 43 17 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'2',
            'civil_status_id'=>'3',
            'type_document_id' => '1',
            'roles_id' => '2',
            'eps_id' => '2',
        ]);
        //$patient->assignRole('Paciente');
    }
}
