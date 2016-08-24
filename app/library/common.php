<?php
 function upload($request,$destinationPath){
           if($request->hasFile('upload')){
                if($request->file('upload')->isValid()){        
                  	$file = $request->file('upload');
                  	$fileName = $file->getClientOriginalName();           
                  	$request->file('upload')->move($destinationPath,$fileName);
                }              
            }
            return $fileName;                  
  
}
