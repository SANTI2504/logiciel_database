<?php

namespace Database\Seeders;

use App\Models\Inventory;
use Illuminate\Database\Seeder;

class InventoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Inventory::create([
            'description'=>'Descripcion del producto',
            'product_code'=>'63266476636',
            'amount'=>'0',
            'lab_manufacturers_id'=>'2',
            'products_id'=>'1',
        ]);
        Inventory::create([
            'description'=>'Descripcion del producto',
            'product_code'=>'8239676275',
            'amount'=>'0',
            'lab_manufacturers_id'=>'1',
            'products_id'=>'2',
        ]);
        Inventory::create([
            'description'=>'Descripcion del producto',
            'product_code'=>'7346473686',
            'amount'=>'0',
            'lab_manufacturers_id'=>'3',
            'products_id'=>'4',
        ]);
        Inventory::create([
            'description'=>'Descripcion del producto',
            'product_code'=>'78464746746',
            'amount'=>'0',
            'lab_manufacturers_id'=>'4',
            'products_id'=>'3',
        ]);
        Inventory::create([
            'description'=>'Descripcion del producto',
            'product_code'=>'5484154545',
            'amount'=>'0',
            'lab_manufacturers_id'=>'5',
            'products_id'=>'5',
        ]);
    }
}
