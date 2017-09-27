<?php
use Illuminate\Database\Seeder;

class RepairTrick extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\RepairTrick::class, 20)->create()->each(function ($repairTrick) {
            foreach (range(0, rand(0, 3)) as $value) {
                if ($value == 0) {
                    continue;
                }
                $repairTrick->comRepairTrick()
                    ->save(factory(App\ComRepairTrick::class)->make([
                    'article_id' => $repairTrick->id,
                    'user_id' => rand(1, 20)
                ]));
            }
        });
    }
}
