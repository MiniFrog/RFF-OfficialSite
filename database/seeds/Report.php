<?php
use Illuminate\Database\Seeder;

class Report extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Report::class, 20)->create()->each(function ($report) {
            foreach (range(0, rand(0, 3)) as $value) {
                if ($value == 0) {
                    continue;
                }
                $report->comReport()
                    ->save(factory(App\ComReport::class)->make([
                    'user_id' => rand(1, 20),
                    'article_id' => $report->id
                ]));
            }
        });
    }
}
