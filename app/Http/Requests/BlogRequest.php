<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogRequest extends FormRequest
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
            'title_en' =>'required|max:191',
            'title_ar' =>'required|max:191',
//            'content_en' =>'required',
//            'content_ar' =>'required',
            'user_id' =>'required'
        ];
    }

    public function messages()
    {
        return [

            'title_en.required' => 'The English Title is required',
            'title_ar.required' => 'The Arabic Title is required',
//            'content_en.required' => 'The Content in English is required',
//            'content_ar.required' => 'The Content in Arabic is required',
            'user_id.required' => ' User is required Field'
        ];
    }
}
