<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Director;
use App\Association;
use App\Department;
use App\TechGroup;

class IntroductionController extends Controller
{
    //
    public function association()
    {
        $association = Association::find(1);
        $text = array(
            [
                'title' => '协会简介',
                'content' => $association->intro
            ],
            [
                'title' => '品牌活动',
                'content' => $association->activity
            ]
        );
        $img = array(
            array(
                'image' => $association->introimgpath,
            ),
            array(
                'image' => $association->actimgpathf,
            ),
            array(
                'image' => $association->actimgpaths
            )
        );
        return response()->json(['leftcontent' => $text, 'rightcontent' => $img], 200, [], JSON_UNESCAPED_UNICODE);
    }

    //这个接口可能还要改
    public function director()
    {
        $directors = Director::all(['id', 'position', 'name', 'wish', 'imgpath'])->toArray();
        return response()->json([$directors], 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function department()
    {
        //$res = $this->select('id', 'dpt', 'intro', 'imgpathf', 'imgpaths', 'imgpatht')->get();
        $department = Department::select(['id', 'dpt as department', 'intro', 'imgpathf', 'imgpaths', 'imgpatht'])
            ->get()
            ->each(function ($member, $key) {
                $member->image = array($member->imgpathf, $member->imgpaths, $member->imgpatht);
                unset($member->imgpathf);
                unset($member->imgpaths);
                unset($member->imgpatht);
            })
            ->toArray();
        return response()->json($department, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function technical()
    {
        $groups = TechGroup::get(['id', 'group', 'intro', 'imgpathf', 'imgpaths', 'imgpatht'])
            ->each(function ($group, $key) {
                $group->image = array($group->imgpathf, $group->imgpaths, $group->imgpatht);
                unset($group->imgpathf);
                unset($group->imgpaths);
                unset($group->imgpatht);
            })->toArray();
        return response()->json($groups, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function adminPage($page)
    {
        switch ($page) {
            case 'association':
                $result = Association::find(1);
                break;
            case 'director':
                $result = Director::all(['id', 'position', 'name', 'wish', 'imgpath']);
                break;
            case 'department':
                $result = Department::select(['id', 'dpt', 'intro', 'imgpathf', 'imgpaths', 'imgpatht'])->get();
                break;
            case 'technical':
                $result = TechGroup::get(['id', 'group', 'intro', 'imgpathf', 'imgpaths', 'imgpatht'])
                    ->each(function ($group, $key) {
                        $group->image = array($group->imgpathf, $group->imgpaths, $group->imgpatht);
                        unset($group->imgpathf);
                        unset($group->imgpaths);
                        unset($group->imgpatht);
                    });
                break;
            default:
                $result = null;
        }
        return view('admin/publicity/' . $page)->with('results', $result);
    }

    public function adminDepartmentUpdate(Request $request)
    {
        $departments = $request->all();
        foreach ($departments as $department) {
            Department::updateOrCreate(['id' => $department[5]], [
                'dpt' => $department[0],
                'intro' => $department[1],
                'imgpathf' => $department[2],
                'imgpaths' => $department[3],
                'imgpatht' => $department[4],
                'id' => $department[5],
            ]);
        }
        return response('true');
    }

    public function adminAssociationUpdate(Request $request)
    {
        $data = $request->all();
        $data['update_time'] = time();
        Association::updateOrCreate(['id' => 1], $data);
        return response('true');
    }

    public function adminDirectorUpdate(Request $request)
    {
        $directors = $request->all();
        foreach ($directors as $director) {
            Director::updateOrCreate(['id' => $director[4]], [
                'position' => $director[0],
                'name' => $director[1],
                'wish' => $director[2],
                'imgpath' => $director[3],
            ]);
        }
        return response('true');
    }

    public function adminTechnicalUpdate(Request $request)
    {
        $technicals = $request->all();
        foreach ($technicals as $technical) {
            TechGroup::updateOrCreate(['id' => $technical[5]], [
                'group' => $technical[0],
                'intro' => $technical[1],
                'imgpathf' => $technical[2],
                'imgpaths' => $technical[3],
                'imgpatht' => $technical[4]
            ]);
        }
        return response('true');
    }

    public function adminDepartmentDelete(Request $request)
    {
        $department_id = $request->input('id', null);
        Department::find($department_id)->delete();
        return response('true');
    }

    public function adminDirectorDelete(Request $request)
    {
        $director_id = $request->input('id', null);
        Director::find($director_id)->delete();
        return response('true');
    }

    public function adminTechnicalDelete(Request $request)
    {
        $group_id = $request->input('id', null);
        TechGroup::find($group_id)->delete();
        return response('true');
    }

}
