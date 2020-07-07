<?php

use Illuminate\Database\Seeder;

class ImmovableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\models\immovable::class, 25)->create();
    }
}
