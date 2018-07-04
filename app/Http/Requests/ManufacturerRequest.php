<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ManufacturerRequest extends FormRequest
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
            'name_en' =>'required|max:191',
            'name_ar' =>'required|max:191',
//	        'img'=>'required'
//            'content_en' =>'required',
//            'content_ar' =>'required',
        ];
    }

     public function messages()
    {
        return [

            'name_en.required' => 'The English Name is required',
            'name_ar.required' => 'The Arabic Name is required',
//            'img.required'=>'Please Upload Image'
//            'content_en.required' => 'The Content in English is required',
//            'content_ar.required' => 'The Content in Arabic is required'
        ];
    }
}
