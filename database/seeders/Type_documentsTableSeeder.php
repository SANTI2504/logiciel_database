<?php

namespace Database\Seeders;

use App\Models\Type_document;
use Illuminate\Database\Seeder;

class Type_documentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type_document::create([
            'name' => 'Cedula de ciudadania'
        ]);

        Type_document::create([
            'name' => 'Tarjeta de identidad'
        ]);
    }
}
