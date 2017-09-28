<?php

namespace App\Http\Controllers;

use App\Activity;

class ActivityController extends Controller
{
    const ACTIVITY_ON = 1;

    //
    public function active()
    {
        $activities = Activity::where('status', '=', $this::ACTIVITY_ON)
            ->get(['id', 'title', 'abstract', 'schedule', 'way', 'poster'])
            ->map(function($activity, $key) {
                $activity->schedule = json_decode($activity->schedule, true);
                $activity->way = json_decode($activity->way, true);
                return $activity;
            })->toArray();
        return json_encode($activities, JSON_UNESCAPED_UNICODE);
    }


}
