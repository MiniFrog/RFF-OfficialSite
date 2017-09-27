<?php

use Illuminate\Database\Seeder;

class Florilegium extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\AdminModel\xhdt\Florilegium::class, 30)->create();
    }
}
