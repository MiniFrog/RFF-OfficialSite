<?php

namespace App\Http\Controllers;

use Doctrine\Common\Reflection\ReflectionProviderInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Work;
use App\Report;

class ArticleController extends Controller
{
    //
    public function work(Request $request)
    {
        $page_index = $request->input('pageIndex', 0);
        $page_size = $request->input('pageSize', 0);
        if ($page_index <= 0 || $page_size <= 0) {
            return response('', 500);
        }
        $works = Work::forPage($page_index, $page_size)
            ->get(['id', 'title', 'abstract', 'updated_at as updateTime', 'imgpath as picUrl'])
            ->toArray();
        $total_page = ceil(Work::count('id') / $page_size);
        return [
            'pageIndex' => (int)$page_index,
            'totalPage' => $total_page,
            'collection' => $works
        ];
    }

    public function report(Request $request)
    {
        $pageIndex = $request->input('pageIndex', 0);
        $pageSize = $request->input('pageSize', 0);
        if ($pageIndex <= 0 || $pageSize <= 0) {
            return response('', 500);
        }
        $reports = Report::forPage($pageIndex, $pageSize)
            ->get(['id', 'title', 'abstract', 'updated_at as updateTime', 'imgpath as picUrl'])
            ->toArray();
        $total_page = ceil(Work::count('id') / $pageSize);
        return [
            'pageIndex' => (int)$pageIndex,
            'totalPage' => $total_page,
            'report' => $reports
        ];
    }

    public function reportDetail(Request $request)
    {
        $report_id = $request->input('id', false);
        if ($report_id <= 0) {
            return response()->json(array(
                'state' => 'failed',
                'mes' => 'invalid id'
            ), 500);
        }
        $report = Report::where('id', '=', $report_id)->get(['title'])->first();
        if ($report->count() == 0) {
            return response()->json(array(
                'state' => 'failed',
                'mes' => 'invalid id'
            ), 500);
        }
        $filename = $report_id . ".txt";
        if (Storage::disk('reports')->exists($filename)) {
            $file = Storage::disk('reports')->get($filename);
        } else {
            $file = '';
        }
        return [
            'title' => $report->title,
            'content' => $file
        ];
    }

    public function adminPage($page)
    {
        switch ($page) {
            case 'report':
                $result = Report::get(['id', 'title', 'status']);
                break;
            case 'work':
                $result = Work::get(['id', 'title']);
                break;
            default:
                $result = null;
                abort(404);
        }
        return view('admin/dynamic/' . $page . 'List')->with('results', $result);
    }

    public function reportDelete(Request $request)
    {
        Report::find($request->input('id', null))->delete();
        Storage::disk('reports')->delete($request->input('id'). '.txt');
        return response('true');
    }

    public function reportCreate()
    {
        $result = [
            'id' => '',
            'title' => '',
            'abstract' => '',
            'imgpath' => '',
            'content' => ''
        ];
        return view('admin/dynamic/reportModify')->with('result', $result);
    }

    public function reportModify($id)
    {
        $result = Report::find($id)->toArray();
        $file_name = $id . '.txt';
        if (Storage::disk('reports')->exists($file_name)) {
            $file = Storage::disk('reports')->get($file_name);
        } else {
            $file = '';
        }
        $result['content'] = $file;
        return view('admin/dynamic/reportModify')->with('result', $result);
    }

    public function reportUpdate(Request $request)
    {
        $data = $request->all();
        $content = array_get($data, 'content', '');
        unset($data['content']);
        $report = Report::updateOrCreate(['id' => $data['id']],
            $data
        );
        $file_name = $report->id. '.txt';
        Storage::disk('reports')->put($file_name, $content);
        return redirect('admin/dynamic/report');
    }

    public function reportChangeStatus($id, $status)
    {
        $status++;
        if ($status >= 3) {
            $status = 0;
        }
        Report::find($id)->update(['status' => $status]);
        return response('true');
    }

    public function workDelete(Request $request)
    {
        Work::find($request->input('id', null))->delete();
        return response('true');
    }

    public function workCreate()
    {
        $result = [
            'id' => '',
            'title' => '',
            'abstract' => '',
            'imgpath' => '',
        ];
        return view('admin/dynamic/workModify')->with('result', $result);
    }

    public function workModify($id)
    {
        $result = Work::find($id)->toArray();
        return view('admin/dynamic/workModify')->with('result', $result);
    }

    public function workUpdate(Request $request)
    {
        $data = $request->all();
        Work::updateOrCreate(['id' => $data['id']],
            $data
        );
        return redirect('admin/dynamic/work');
    }

}
