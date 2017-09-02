<?php

use Illuminate\Database\Seeder;

class ChemicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Cidery\Chemical::class, 10)->create();
    }
}
