<?php

namespace Database\Seeders;

use App\Models\Eps;
use Illuminate\Database\Seeder;

class EpsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Eps::create([
            'name' => 'Ninguno'
        ]);
        Eps::create([
            'name' => 'Sisben'
        ]);
    }
}
