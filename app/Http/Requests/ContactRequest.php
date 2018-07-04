<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
//            'phone' =>'required',
            'email' =>'required',
//            'position_en' =>'required|max:191',
//            'position_ar' =>'required|max:191'

        ];
    }

    public function messages()
    {
        return [

            'name_en.required' => 'The English name is required',
            'name_ar.required' => 'The Arabic name is required',
//            'phone.required' => 'Phone Number is required',
            'email.required' => 'Email is required',
//            'position_en.required' => ' Postion In English is required Field',
//            'position_ar.required' => ' Postion In Arabic is required Field'

        ];
    }
}
