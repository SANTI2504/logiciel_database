<?php

namespace Database\Seeders;

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'name' => 'Masculino'
        ]);
        Gender::create([
            'name' => 'Femenino'
        ]);
        Gender::create([
            'name' => 'indefinido'
        ]);
        Gender::create([
            'name' => 'Prefiero no decirlo'
        ]);
    }
}
