<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' =>'required|max:191',
            'email' =>'required',
            'mobile' =>'required|max:17|min:11',
            'job' =>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => ' Name is required',
            'email.required' => 'Email is required',
            'mobile.required' => 'Mobile is required',
	        'mobile.min'=>'Mobile Must be at least 11 Digits',
            'mobile.max'=>'Mobile Must be at Max 17 Digits',
            'job.required' => 'Job is required',
            'password.required' => 'Password is required'
        ];
    }
}
