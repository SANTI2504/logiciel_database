<?php

namespace Database\Seeders;

use App\Models\Rol;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Rol::create([
           'name' => 'admin'
        ]);
        Rol::create([
            'name' => 'patient'
        ]);
        Rol::create([
            'name' => 'specialist'
        ]);
        Rol::create([
            'name' => 'auxiliary'
        ]);
    }
}
