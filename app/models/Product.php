<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    protected $table = "product";

    
   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];
    public function Manufacturer(){

        return $this->belongsTo('App\models\Manufacturer', 'manufacturer_id');
    }


     public function Currency(){

        return $this->belongsTo('App\models\Currency', 'currency_id');
    }

    public function entity(){

        return $this->belongsToMany('App\models\Entity', 'product_entity','product_id','entity_id');
    }

    public function Product_category(){

        return $this->belongsTo('App\models\Product_category', 'catproduct_id');
    }

     public function Product_image(){

        return $this->hasMany('App\models\Product_images', 'product_id');
    }

    public function Accessory(){

        return $this->hasMany('App\models\Accessory', 'product_id');
    }

    public function Product_document(){

        return $this->hasMany('App\models\Product_document', 'product_id');
    }

    public function Product_entity(){

        return $this->hasMany('App\models\Product_entity', 'product_id');
    }

}
