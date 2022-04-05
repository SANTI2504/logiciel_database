<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'lentes de contacto'
        ]);
        Product::create([
            'name' => 'gotas'
        ]);
        Product::create([
            'name' => 'toallitas'
        ]);
        Product::create([
            'name' => 'gafas'
        ]);
        Product::create([
            'name' => 'lubricante'
        ]);
        Product::create([
            'name' => 'marco'
        ]);
        Product::create([
            'name' => 'estuche'
        ]);
        Product::create([
            'name' => 'limpiador de gafas'
        ]);
    }
}
