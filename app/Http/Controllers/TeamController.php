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
	$companyTeams = Team::where('id', '<', 20)->where('team_type', '=', COMPANY_TYPE)->get();
	$schoolTeams = Team::where('id','<', 20)->where('team_type', '=', SCHOOL_TYPE)->get();
	$societyTeams = Team::where('id','<',20)->where('team_type', '=', SOCIETY_TYPE)->get();
    	return view('team/index',[
		'companyTeams' => $companyTeams,
		'schoolTeams' => $schoolTeams,
		'societyTeams' => $societyTeams
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
	    $team->team_description = $request->get('team_description');
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
	public function teamDetail($id){
		return view('team/teamDetail')->withTeam(Team::find($id));
	}
	
	
	
}
