<?php

use Illuminate\Database\Seeder;
use App\QQUser;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\User::class, 20)->create()->each(function($user) {
            if(rand(1, 2) == 1) {
                return;
            }
            factory(App\QQUser::class)->make([
                'user_id' => $user->id,
            ])->save();
        });
    }
}
