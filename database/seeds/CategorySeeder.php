<?php

use Illuminate\Database\Seeder;
use App\models\category ;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        category::create([
            'name'=>'Vente'
        ]);
        category::create([
            'name'=>'Location'
        ]);
    }
}
