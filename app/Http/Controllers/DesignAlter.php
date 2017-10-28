<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Design;
use App\Http\Requests;

class DesignAlter extends Controller
{
	public function designAlter(Request $request)
	{
		if($teaminfo = $request->input('teaminfo'))
		{
			$design_alter = new Design;
			if($design_alter_result = $design_alter->where('teamming',$teaminfo)->first())
				$design_alter_result = $design_alter_result->toArray();
			return view('designAlter')->with('attributes', $design_alter_result);
		}
		else
		{
			return "Something wrong!";
		}
	}

	public function designAlterHandle(Request $request)
	{
		if($original_teamname = $request->input('original_teamname'))
		{
			$design_alter_handle = new Design;
			if($design_alter_handle_result = $design_alter_handle->where('teamming',$original_teamname))
			{
				$design_alter_handle_content = $request->except(['original_teamname','altersubmit']);
				if($design_alter_handle_result = $design_alter_handle_result->update($design_alter_handle_content))
				{
					return "Update success!";
				}
				else
				{
					return "Update fail!";
				}
			}
		}
	}
}

?>