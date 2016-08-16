<?php

use Illuminate\Database\Seeder;

class PopularPatrimonio extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Patrimo',10)->create();
    }
}
