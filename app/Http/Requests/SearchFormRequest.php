<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class SearchFormRequest extends Request
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
            'searchText'=>'min:3|max:100',
        ];
    }
    
	public function messages()
	{
		return [
			'name.searchText' => 'Данное поле :attribute должно быть от 3 до 100 символов',
		];
	}
	
	
	
}
