<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchRequest extends FormRequest
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
//            'address_en' =>'required|max:191',
//            'address_ar' =>'required|max:191',
            'email' =>'required|email',
//            'phone1' =>'required|regex:/(01)[0-9]{9}/',
//            'map' =>'required'
        ];
    }


    public function messages()
    {
        return [
            'name_en.required' => 'The English Name is required',
            'name_ar.required' => 'The Arabic Name is required',
//            'address_en.required' => 'The English Address is required',
//            'address_ar.required' => 'The Arabic Address is required',
//            'phone1.required' => 'The Phone Number is required',
            'email.required' => 'The Email is required',
//            'map.required' => 'The Map is required'
        ];
    }



}
