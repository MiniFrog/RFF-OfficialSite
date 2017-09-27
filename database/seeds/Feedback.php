<?php

use Illuminate\Database\Seeder;

class Feedback extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Feedback::class, 40)->create()->each(function($feedback){
            if(rand(1, 3) != 1) {
                $feedback->feedbackResponse()->save(factory(App\FeedbackResponse::class)->make([
                    'user_id' => $feedback->user_id,
                    'question_id' => $feedback->id,
                ]));
            }
        });
    }
}
