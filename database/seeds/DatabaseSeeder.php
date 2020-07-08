<?php

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
        // $this->call(UserSeeder::class);
        // $this->call(CategorySeeder::class);
        // $this->call(CitySeeder::class);
        // $this->call(ClientSeeder::class);
        // $this->call(CommuneSeeder::class);
        // $this->call(ContractSeeder::class);
        // $this->call(EmployeeSeeder::class);
        // $this->call(ImmovableSeeder::class);
        // $this->call(QuarterSeeder::class);
        // $this->call(RentSeeder::class);
        $this->call(StatusSeeder::class);
    }
}
