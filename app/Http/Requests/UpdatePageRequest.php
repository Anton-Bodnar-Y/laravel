<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UpdatePageRequest extends Request
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
            'title'=>'required|min:3|max:255',
            'text'=>'required|min:100|max:1000',
			'meta_title'=>'required|min:20|max:255',
			'meta_desc'=>'required|min:20|max:500',
			'meta_keyword'=>'required|min:20|max:255',
			'imgPage'=>'mimes:jpeg,bmp,png|max:256',
        ];
    }
}
