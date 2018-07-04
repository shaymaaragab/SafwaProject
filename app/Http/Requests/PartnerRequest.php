<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartnerRequest extends FormRequest
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
            'name_ar' =>'required|max:191'
        ];
    }

    public function messages()
    {
        return [

            'name_en.required' => 'The English name is required',
            'name_ar.required' => 'The Arabic name is required'

        ];
    }

}
