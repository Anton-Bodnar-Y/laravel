<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdateNewRequest extends Request
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
            //
            
            'title'=>'required|min:10|max:255',
			'newShortDesc'=>'required|min:100|max:1000',
			'newText'=>'required|min:200|max:10000',
			
			'new_title'=>'required|min:20|max:255',
			'new_desc'=>'required|min:20|max:500',
			'new_key'=>'required|min:20|max:255',
			
			'img'=>'mimes:jpeg,bmp,png|max:256',
        ];
    }
}
