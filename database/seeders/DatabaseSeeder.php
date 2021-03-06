<?php

namespace Database\Seeders;


use App\Models\Available_time;
use App\Models\Lab_manufacturer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call(RolesTableSeeder::class);
        $this->call(Type_documentsTableSeeder::class);
        $this->call(EpsTableSeeder::class);
        $this->call(GendersTableSeeder::class);
        $this->call(Civil_statusesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(AuxiliariesTableSeeder::class);
        $this->call(PatientsTableSeeder::class);
        $this->call(SpecialistsTableSeeder::class);
        $this->call(Type_appointmentsTableSeeder::class);
        $this->call(AppointmentsTableSeeder::class);
        $this->call(Medical_historiesTableSeeder::class);
        $this->call(Medical_examsTableSeeder::class);
        $this->call(Available_timeTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(Lab_manufacturersTableSeeder::class);
        $this->call(InventoriesTableSeeder::class);
    }
}
