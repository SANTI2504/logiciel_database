<?php

namespace Database\Seeders;

use App\Models\Specialist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class SpecialistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialist = Specialist::create([
            'name'=>'Luisa Fernanda',
            'lastnames'=> 'Forero Sierra',
            'number_document'=> '1005659635',
            'email' => 'luisa@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '3145699658',
            'address'=>'carrera 50 B N 54 56 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'2',
            'civil_status_id'=>'2',
            'type_document_id' => '1',
            'roles_id' => '3',
            'eps_id' => '2',

        ]);
        //$specialist->assignRole('Especialista');

        $specialist = Specialist::create([
            'name'=>'Laura Sodia',
            'lastnames'=> 'Hernandez Sierra',
            'number_document'=> '1235698564',
            'email' => 'laura@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2002-04-16' ,
            'number_cell' => '301548965',
            'address'=>'calle 13 B N 64 23 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'2',
            'civil_status_id'=>'3',
            'type_document_id' => '1',
            'roles_id' => '3',
            'eps_id' => '1',
        ]);
        //$specialist->assignRole('Especialista');
    }
}
