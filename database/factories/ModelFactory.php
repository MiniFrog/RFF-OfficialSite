<?php
$factory->define(App\Activity::class, function (Faker\Generator $faker) {
    $array = [];
    foreach (range(0, rand(0, 3)) as $value) {
        $array[$value] = new stdClass();
        $array[$value]->begin_time = $faker->numberBetween();
        $array[$value]->end_time = $array[$value]->begin_time + 1000000;
        $array[$value]->place = $faker->word;
        $array[$value]->stage = $faker->word;
    }
    return [
        'title' => $faker->word,
        'abstract' => $faker->word,
        'schedule' => json_encode($array),
        'sign_up_url' => $faker->url
    ];
});

$factory->define(App\CompetitionMember::class, function (Faker\Generator $faker) {
    return [
        'team_id' => $faker->randomNumber(),
        'is_leader' => $faker->boolean,
        'name' => $faker->name,
        'phone' => $faker->phoneNumber,
        'qq' => $faker->word
    ];
});

$factory->define(App\CompetitionTeam::class, function (Faker\Generator $faker) {
    return [
        'team_name' => $faker->word,
        'slogen' => $faker->word
    ];
});

$factory->define(App\ComRepairTrick::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->text
    ];
});

$factory->define(App\ComReport::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->text
    ];
});

$factory->define(App\Feedback::class, function (Faker\Generator $faker) {
    return [
        'user_id' => rand(1, 20),
        'content' => $faker->text
    ];
});

$factory->define(App\FeedbackResponse::class, function (Faker\Generator $faker) {
    return [
        'content' => $faker->text,
        'admin_id' => rand(1, 4),
    ];
});

$factory->define(App\Forilegium::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'abstract' => $faker->word
    ];
});

$factory->define(App\QQUser::class, function (Faker\Generator $faker) {
    $class = new stdClass();
    $class->nick_name = $faker->word;
    $class->figureurl = $faker->url;
    return [
        'open_id' => $faker->word,
        'access_token' => $faker->word,
        'refresh_token' => $faker->word,
        'user_info' => json_encode($class)
    ];
});

$factory->define(App\RepairTrick::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'abstract' => $faker->word
    ];
});

$factory->define(App\Report::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->word,
        'abstract' => $faker->word
    ];
});

$factory->define(App\User::class, function (Faker\Generator $faker) {
    return [
        'username' => $faker->userName,
        'password' => bcrypt($faker->password),
        'nickname' => $faker->word,
        'regis_time' => $faker->dateTimeBetween(),
        'login_time' => $faker->dateTimeBetween()
    ];
});

$factory->define(App\Admin::class, function (Faker\Generator $faker){
    return [];
});
