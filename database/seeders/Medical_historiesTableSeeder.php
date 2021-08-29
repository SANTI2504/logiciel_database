<?php

namespace Database\Seeders;

use App\Models\Medical_history;
use Illuminate\Database\Seeder;

class Medical_historiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medical_history::create([
            'count_exams'=>'1',
            'last_diagnosis'=>'',
            'personal_history'=>'Ninguna',
            'family_history'=>'Ninguna',
            'surgical_history'=>'Ninguna',
            'patients_id'=>'1',
        ]);
        Medical_history::create([
            'count_exams'=>'1',
            'last_diagnosis'=>'',
            'personal_history'=>'Ninguna',
            'family_history'=>'Ninguna',
            'surgical_history'=>'Ninguna',
            'patients_id'=>'2',
        ]);
    }
}
