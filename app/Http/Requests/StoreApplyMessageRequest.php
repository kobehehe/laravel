<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class StoreApplyMessageRequest extends Request
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
        'player_name' => 'required',
        'player_age' => 'required',
        ];
    }
    public function messages()
    {
    	return [
            'player_name.required' => '队员名字必填',
            'player_age.required' => '队员年龄必填',
    	];
    }	
}
