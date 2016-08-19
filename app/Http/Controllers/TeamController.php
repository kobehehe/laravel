<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Team;
use App\Http\Requests\StoreBlogPostRequest; 
class TeamController extends Controller
{
    public function index()  
	{	
    	return view('team/index');
	}

    public function create(){
	return view('team/teamAdd');
	}
	
    public function store(StoreBlogPostRequest $request)  
	{
	    if($request->hasFile('team_logo')){
		if($request->file('team_logo')->isValid()){	
		  $file = $request->file('team_logo');
		  $destinationPath = 'upload/teamlogo';
		  $fileName = $file->getClientOriginalName();		
		  $request->file('team_logo')->move($destinationPath,$fileName);
		}
	    }
	    $team = new Team;
	    $team->team_name = $request->get('team_name');
	    $team->team_number = $request->get('team_number');
	    $team->team_captain_name = $request->get('team_captain_name');
	    $team->create_time = time();
	    $team->team_logo = $destinationPath.'/'.$fileName;		
	    if ($team->save()) {
	        return redirect('team');
	    } else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }
	}
	
}
