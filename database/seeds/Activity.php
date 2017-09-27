<?php

use Illuminate\Database\Seeder;

class Activity extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Activity::class, 20)->create();
    }
}
