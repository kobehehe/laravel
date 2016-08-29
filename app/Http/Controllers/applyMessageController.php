<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\StoreApplyMessageRequest;
class applyMessageController extends Controller
{
   public function show($id)  {	
		return view('team/teamJoin',[
			'teamId' => $id
		]);	
	}

	 public function store(StoreApplyMessageRequest $request){ 
	    //$applyMessage = new applyMessage;
	    var_dump(123);
	    die();
	    
	} 
}
