<?php

namespace Database\Seeders;

use App\Models\Type_appointment;
use Illuminate\Database\Seeder;


class Type_appointmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_appointment::create([
            'name' => 'Optometría',
        ]);

        Type_appointment::create([
            'name' => 'Ortóptica',
        ]);

        Type_appointment::create([
            'name' => 'Pediatría (de 0 a 4 años)',
        ]);

    }
}
