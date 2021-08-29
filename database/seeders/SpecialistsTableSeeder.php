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
            'type_document_id' => '1',
            'roles_id' => '3',
            'eps_id' => '1',
        ]);
        //$specialist->assignRole('Especialista');
    }
}
