<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
	        'price'=>'numeric',
//	        'shortcontent_en' =>'required',
//	        'shortcontent_ar' =>'required',
//	        'video' =>'required',
//	        'price' =>'required',
//	        'model_en' =>'required',
//	        'model_ar' =>'required',
	        'manufacturer_id' =>'required',
	        'currency_id' =>'required',
	        'entity_id' =>'required',
	        'catproduct_id' =>'required',
//	        'img' =>'required',
//	        'fullcontent_en' =>'required',
//	        'fullcontent_ar' =>'required',



        ];
    }
	public function messages()
	{
		return [

			'name_en.required' => 'The English name is required',
			'name_ar.required' => 'The Arabic name is required',
			'price.numeric'=>'Price must be Numeric',
//			'shortcontent_en.required' => 'The Short Content English is required',
//			'shortcontent_ar.required' => 'The Short Content Arabic is required',
//			'video.required' => 'The Video is required',
//			'price.required' => 'The Price is required',
//			'model_en.required' => 'The Model English is required',
//			'model_ar.required' => 'The Model Arabic is required',
			'manufacturer_id.required' => 'The Manufacturer is required',
			'currency_id.required' => 'The Currency is required',
			'entity_id.required' => 'The Entity is required',
			'catproduct_id.required' => 'The Category is required',
//			'img.required' => 'The Image is required',
//			'fullcontent_en.required' => 'The Full Content English is required',
//			'fullcontent_ar.required' => 'The Full Content Arabic is required'


		];
	}
}
