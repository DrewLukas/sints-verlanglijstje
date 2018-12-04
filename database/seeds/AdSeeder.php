<?php

use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Ad::insert([
            ['cadeau' => 'winterpeen',
             'beschrijving' => 'voor de schimmel',
             'created_at' => now(),
             'updated_at' => now()
            ]
        ]);
    }
}
