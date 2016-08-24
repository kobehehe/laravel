<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Team;
use App\Http\Requests\StoreBlogPostRequest;
class TeamController extends Controller
{  
    public function __construct()
     {
         $this->middleware('auth');
     }

    public function index()  
	{	
    	return view('team/index');
	}

    public function create(){
	
		return view('team/teamAdd');
	}
	
    public function store(StoreBlogPostRequest $request)  
	{   $destinationPath = 'upload/teamlogo';	
	    $fileName = upload($request,$destinationPath);	
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
