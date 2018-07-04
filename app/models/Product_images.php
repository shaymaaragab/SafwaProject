<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_images extends Model
{
	protected $table = "product_images";
		        
   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];
    public function Product(){

        return $this->belongsTo('App\models\Product', 'product_id');
    }
	public static $rules = [
		'file' => 'required|mimes:png,gif,jpeg,jpg,bmp'
	];

	public static $messages = [
		'file.mimes' => 'Uploaded file is not in image format',
		'file.required' => 'Image is required'
	];

}
