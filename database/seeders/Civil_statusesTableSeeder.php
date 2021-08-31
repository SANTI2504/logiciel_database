<?php

namespace Database\Seeders;

use App\Models\Civil_status;
use Illuminate\Database\Seeder;

class Civil_statusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Civil_status::create([
            'name' => 'Soltero(a)'
        ]);
        Civil_status::create([
            'name' => 'Casado(a)'
        ]);
        Civil_status::create([
            'name' => 'Viudo(a)'
        ]);
        Civil_status::create([
            'name' => 'Union libre'
        ]);
    }
}
