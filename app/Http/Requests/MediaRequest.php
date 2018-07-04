<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MediaRequest extends FormRequest
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
            'album_id' =>'required',
	        'src'=>'url',
        ];
    }


    public function messages()
    {
        return [

            'title_en.required' => 'The English Title is required',
            'title_ar.required' => 'The Arabic Title is required',
            'album_id.required' => ' Album is required Field',
	        'src.url'=>'Video Must be Valid URL'
        ];
    }

}
