<?php

use Illuminate\Database\Seeder;

class CompetitionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\CompetitionTeam::class, 20)->create()->each(function($team) {
            $team->competitionMember()->save(factory(App\CompetitionMember::class)->make([
                'is_leader' => true,
            ]));
            $team->competitionMember()->save(factory(App\CompetitionMember::class)->make([
                'is_leader' => false,
            ]));
            $team->competitionMember()->save(factory(App\CompetitionMember::class)->make([
                'is_leader' => false,
            ]));
        });
    }
}
