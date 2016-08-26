<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Http\Requests;
use App\Team;
use App\Http\Requests\StoreBlogPostRequest;
class TeamController extends Controller
{  

    public function index()  {	
	$companyTeam = Team::where('id', '>', 10)->where('team_type', '=', COMPANY_TYPE)->get();
	$schoolTeam = Team::where('id','>', 10)->where('team_type', '=', SCHOOL_TYPE)->get();
	$societyTeam = Team::where('id','>',10)->where('team_type', '=', SOCIETY_TYPE)->get();
    	return view('team/index',[
		'companyTeam' => $companyTeam,
		'schoolTeam' => $schoolTeam,
		'societyTeam' => $societyTeam
	]);
	}

    public function create(){
		return view('team/teamAdd');
	}
	
    public function store(StoreBlogPostRequest $request){  
	    $team = new Team;
	    $team->team_name = $request->get('team_name');
	    $team->team_number = $request->get('team_number');
	    $team->team_captain_name = $request->get('team_captain_name');
	    $team->create_time = time();
	    $team->team_type = $request->get('team_type');
	    if($request->file('upload')){
		$destinationPath = 'upload/teamlogo';	
	    	$fileName = upload($request,$destinationPath);	
	    	$team->team_logo = $destinationPath.'/'.$fileName;
	    }	
	    if ($team->save()) {
	        return redirect('team');
	    } else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }
	}
	
}
