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
            ['cadeau' => 'chocolade geld',
             'beschrijving' => 'voor het mannetje',
             'created_at' => now(),
             'updated_at' => now()
            ]
        ]);
    }
}
