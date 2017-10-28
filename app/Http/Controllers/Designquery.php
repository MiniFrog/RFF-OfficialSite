<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Design;
//use DB;
use App\Http\Requests;
//use Illuminate\Support\Collection;

/**
* 
*/
class Designquery extends Controller
{
	public function designquery(Request $request)
	{
		$teamname = $request->input('query');
		//$result = DB::table('design')->where('teamming',$teamname)->first()->toArray();
		$designquery = new Design;
		//$result = $designquery->select('teamming')->get();
		//$result = $designquery->where('teamming',$teamname)->first()->toArray();
		$result = $designquery->where('teamming',$teamname)->first();
		//dd($result);
		if($result)
		{
			$result = $result->toArray();
			return view('designquery')->with('attributes', $result);
		}
		else
		{
			$falseresult = array('result' => '查无此人');
			return view('designquery')->with('attributes', $falseresult);
		}
		//return view('designquery')->with('attributes', $result);
	}
	
}

?>