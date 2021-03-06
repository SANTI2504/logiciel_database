<?php

namespace Database\Seeders;

use App\Models\Auxiliary;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AuxiliariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auxiliarie = Auxiliary::create([
            'name'=>'Camilo Andres',
            'lastnames'=> 'Vasquez Rincon',
            'number_document'=> '1002352123',
            'email' => 'camilo@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '311567857',
            'address'=>'carrera 34 B N 76 56 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'1',
            'civil_status_id'=>'2',
            'type_document_id' => '1',
            'roles_id' => '4',
            'eps_id' => '1',
        ]);
        //$auxiliarie->assignRole('Auxiliar');

        $auxiliarie = Auxiliary::create([
            'name'=>'Sandra Milena',
            'lastnames'=> 'Sanchez Rincon',
            'number_document'=> '100254865',
            'email' => 'sandra@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '3115687456',
            'address'=>'calle 65 B N 76 23 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'2',
            'civil_status_id'=>'1',
            'type_document_id' => '1',
            'roles_id' => '4',
            'eps_id' => '2',
        ]);
        //$auxiliarie->assignRole('Auxiliar');
    }
}
