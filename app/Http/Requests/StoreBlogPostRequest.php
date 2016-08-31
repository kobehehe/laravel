<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreBlogPostRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
        'team_name' => 'required|unique:teams|max:255',
	    'team_captain_name' => 'required',
	    'team_number' => 'required',
        ];
    }
    public function messages()
    {
    	return [
        	'team_name.required' => '队名是必填的',
        	'team_captain_name.required'  => '消息是必填的',
		    'team_number.required'=>'队员数量必填',
		    'team_name.unique' => '这个队名已经存在,请换一个吧',

    	];
    }	
}
