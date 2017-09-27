<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(User::class);
        $this->call(Feedback::class);
        $this->call(Report::class);
        $this->call(RepairTrick::class);
        $this->call(Forilegium::class);
        $this->call(Activity::class);
        $this->call(CompetitionSeeder::class);
        $this->call(Admin::class);
    }
}
