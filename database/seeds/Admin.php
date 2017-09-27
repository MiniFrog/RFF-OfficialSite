<?php
use Illuminate\Database\Seeder;

class Admin extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Admin::class, 1)->create(array(
            'username' => 'MiniFrog',
            'password' => hash('sha256', 'al3682733'),
            'nickname' => 'MiniFrog',
            'authority' => 2
        ));
        factory(App\Admin::class, 1)->create(array(
            'username' => 'Matafela',
            'password' => hash('sha256', '199611@#'),
            'nickname' => '满堂风来',
            'authority' => 2
        ));
        factory(App\Admin::class, 1)->create(array(
            'username' => 'weimian',
            'password' => hash('sha256', '1997.8.26abcd'),
            'nickname' => '海勉',
            'authority' => 2,
        ));
        factory(App\Admin::class, 1)->create(array(
            'username' => 'zero',
            'password' => hash('sha256', '23333'),
            'nickname' => '零度冰华',
            'authority' => 2
        ));
    }
}
