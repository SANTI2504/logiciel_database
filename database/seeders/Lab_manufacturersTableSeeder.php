<?php

namespace Database\Seeders;

use App\Models\Lab_manufacturer;
use Illuminate\Database\Seeder;

class Lab_manufacturersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lab_manufacturer::create([
            'name' => 'Tous'
        ]);
        Lab_manufacturer::create([
            'name' => 'Police'
        ]);
        Lab_manufacturer::create([
            'name' => 'Vogue'
        ]);
        Lab_manufacturer::create([
            'name' => 'Persol'
        ]);
        Lab_manufacturer::create([
            'name' => 'Prada'
        ]);
        Lab_manufacturer::create([
            'name' => 'Tom Ford'
        ]);
        Lab_manufacturer::create([
            'name' => 'Adidas'
        ]);
        Lab_manufacturer::create([
            'name' => 'Lacoste'
        ]);
        Lab_manufacturer::create([
            'name' => 'Laboratorio Elea'
        ]);
        Lab_manufacturer::create([
            'name' => 'Retina SAS'
        ]);
        Lab_manufacturer::create([
            'name' => 'Laboratorios Sophia'
        ]);
    }
}
