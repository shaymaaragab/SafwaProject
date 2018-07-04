<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_category extends Model
{
	protected $table = "product_category";
        
   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];

    public function parent(){

        return $this->belongsTo('App\models\Product_category', 'parent_id');
    }

    public function Product_category(){

        return $this->hasMany('App\models\Product_category', 'parent_id');
    }

    public function Product(){

        return $this->hasMany('App\models\Product', 'catproduct_id');
    }
}
