<?php

namespace Database\Seeders;

use App\Models\Available_time;
use Illuminate\Database\Seeder;

class Available_timeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ingresa solamente un dato por atributo

        Available_time::create([
            'time' => '06:00:00',
        ]);
        Available_time::create([
            'time' => '07:00:00',
        ]);
        Available_time::create([
            'time' => '08:00:00',
        ]);
        Available_time::create([
            'time' => '09:00:00',
        ]);
        Available_time::create([
            'time' => '10:00:00',
        ]);
        Available_time::create([
            'time' => '11:00:00',
        ]);
        Available_time::create([
            'time' => '13:00:00',
        ]);
        Available_time::create([
            'time' => '14:00:00',
        ]);
        Available_time::create([
            'time' => '15:00:00',
        ]);
        Available_time::create([
            'time' => '16:00:00',
        ]);

    }
}
