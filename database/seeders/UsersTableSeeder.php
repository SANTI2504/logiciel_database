<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name'=>'Administrador',
            'lastnames'=> 'LDB',
            'number_document'=> '12345678910',
            'email' => 'admin@correo.com',
            'password' => hash::make('12345678'),
            'date_of_bird' => '2021-02-16' ,
            'number_cell' => '3111243456',
            'address'=>'calle 50 B N 54 56 sur',
            'city'=>'Bogota',
            'location'=>'Engativa',
            'neighborhood'=>'Bonanza',
            'gender_id'=>'1',
            'civil_status_id'=>'3',
            'type_document_id' => '1',
            'roles_id' => '1',
            'eps_id' => '1',
        ]);
        $user->assignRole('Administrador');
    }
}
