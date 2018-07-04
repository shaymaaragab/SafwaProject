<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventRequest extends FormRequest
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
	        'title_en'=>'required',
	        'title_ar'=>'required',

        ];
    }

    public function messages()
    {
        return [
	        'title_en.required'=>'Enter Title English Name',
	        'title_ar.required'=>'Enter Title Arabic Name'

        ];
    }
}
