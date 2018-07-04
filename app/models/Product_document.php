<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_document extends Model
{
	protected $table = "product_documents";
	        
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

}
