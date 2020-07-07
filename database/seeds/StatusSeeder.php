<?php

use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\models\status::create(
            [
                'status' => "En vente"
            ]
        );

        \App\models\status::create(
            [
                'status' => "Vendu"
            ]
        );

        \App\models\status::create(
            [
                'status' => "En location"
            ]
        );

        \App\models\status::create(
            [
                'status' => "Louable"
            ]
        );
    }
}
