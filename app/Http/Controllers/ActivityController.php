<?php

namespace App\Http\Controllers;

use App\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    const ACTIVITY_ON = 1;

    //
    public function active()
    {
        $activities = Activity::where('status', '=', $this::ACTIVITY_ON)
            ->get(['id', 'title', 'abstract', 'schedule', 'way', 'poster'])
            ->map(function ($activity, $key) {
                $activity->schedule = json_decode($activity->schedule, true);
                $activity->way = json_decode($activity->way, true);
                return $activity;
            })->toArray();
        return response()->json($activities, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function showList()
    {
        $activities = Activity::get(['id', 'title', 'status'])->toArray();
        return view('admin/dynamic/activityList')->with('results', $activities);
    }

    public function changeStatus($id, $status)
    {
        $status++;
        if ($status >= 3) {
            $status = 0;
        }
        Activity::find($id)->update(['status' => $status]);
        return response('true');
    }

    public function delete(Request $request)
    {
        Activity::find($request->input('id', null))->delete();
        return response('true');
    }

    public function update(Request $request)
    {
        $activity = $request->all();
        $schedule = [];
        $way = [];
        foreach ($activity['stage'] as $key => $value) {
            $schedule[] = array(
                'stage' => $value,
                'beginTime' => $activity['beginTime'][$key],
                'endTime' => $activity['endTime'][$key],
                'place' => $activity['place'][$key]
            );
        }
        foreach ($activity['wayname'] as $key => $value) {
            $way[] = array(
                'wayname' => $value,
                'waycontent' => $activity['waycontent'][$key]
            );
        }
        Activity::updateOrCreate(
            ['id' => $activity['id']],
            [
                'title' => $activity['title'],
                'abstract' => $activity['abstract'],
                'schedule' => json_encode($schedule),
                'way' => json_encode($way),
                'poster' => $activity['poster']
            ]
        );
        return redirect('admin/dynamic/activity');
    }

    public function create()
    {
        $result = [
            'id' => '',
            'title' => '',
            'abstract' => '',
            'schedule' => array(
                array(
                    'stage' => '',
                    'beginTime' => '',
                    'endTime' => '',
                    'place' => '',
                ),
            ),
            'way' => array(
                array(
                    'wayname' => '',
                    'waycontent' => '',
                ),
            ),
            'poster' => ''
        ];
        return view('admin/dynamic/activityModify')->with('result', $result);
    }

    public function modify($id)
    {
        $result = Activity::find($id)->toArray();
        $result['way'] = json_decode($result['way'], true);
        $result['schedule'] = json_decode($result['schedule'], true);
        return view('admin/dynamic/activityModify')->with('result', $result);
    }
}
