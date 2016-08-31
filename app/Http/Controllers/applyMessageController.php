<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreApplyMessageRequest;
use App\applyMessage;
use Redis;
class applyMessageController extends Controller
{
   public function show($id)  {	
		return view('applyMessage/teamJoin',[
			'teamId' => $id
		]);	
	}

	 public function store(StoreApplyMessageRequest $request){ 
	    $applyMessage = new applyMessage;
	    $applyMessage->player_name = $request->get('player_name');
	    $applyMessage->player_age = $request->get('player_age');
	    $applyMessage->player_position = $request->get('player_position');
	    $applyMessage->message = $request->get('message');
	    $applyMessage->team_id = $request->get('team_id');
	    $applyMessage->user_id = $request->user()->id;
	    $applyMessage->apply_time = time();
	    if ($applyMessage->save()) {
	    	Redis::del('companyTeams');
	    	Redis::del('schoolTeams');
	    	Redis::del('societyTeams');
	        return redirect('team/teamDetail/'.$applyMessage->team_id);
	    } else {
	        return redirect()->back()->withInput()->withErrors('保存失败！');
	    }
	    
	} 
}
