<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Manufacturer extends Model
{
   
    protected $table ='manufacture';


   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];


    public function Product(){

        return $this->hasMany('App\models\Product', 'manufacturer_id');
    }


}
