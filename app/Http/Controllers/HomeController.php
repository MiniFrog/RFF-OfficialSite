<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CarouselFigure;
use App\Dynamic;

class HomeController extends Controller
{

    public function carouselFigure()
    {
        $figures = CarouselFigure::get(['id', 'imgpath as image', 'imgmes as content', 'imgtype as title', 'acturl as url'])
            ->toArray();
        return response()->json($figures, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function dynamicState()
    {
        $states = Dynamic::get(['id', 'imgpath as image', 'title', 'summary as abstract', 'acturl as url'])->toArray();
        return response()->json($states, 200, [], JSON_UNESCAPED_UNICODE);
    }

    public function adminCarouselFigure()
    {
        $result = CarouselFigure::get(['id', 'imgpath', 'imgmes', 'imgtype', 'acturl']);
        return view('admin/home/carousel', ['results' => $result]);
    }

    public function adminHomeDynamic()
    {
        $result = Dynamic::get(['id', 'imgpath', 'title', 'summary', 'acturl']);
        return view('admin/home/homeDynamic', ['results' => $result]);
    }

    public function carouselFigureUpdate(Request $request)
    {
        $carousels = $request->all();
        foreach ($carousels as $carousel) {
            CarouselFigure::find($carousel[1])->update([
                'imgpath' => $carousel[0],
                'imgmes' => $carousel[2],
                'imgtype' => $carousel[3],
                'acturl' => $carousel[4],
            ]);
        }
        return response('true');
    }

    public function homeDynamicUpdate(Request $request)
    {
        $dynamics = $request->all();
        foreach ($dynamics as $dynamic) {
            Dynamic::updateOrCreate(
                ['id' => $dynamic[4]],
                [
                    'imgpath' => $dynamic[0],
                    'title' => $dynamic[1],
                    'summary' => $dynamic[2],
                    'acturl' => $dynamic[3],
                ]
            );
        }
        return response('true');
    }

    public function homeDynamicDelete(Request $request)
    {
        Dynamic::find($request->input('id', null))->delete();
        return response('true');
    }
}
