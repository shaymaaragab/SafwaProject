<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product_entity extends Model
{
    protected $table = "product_entity";


    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $guarded = [
        'id',
    ];

    public function product(){

        return $this->belongsTo('App\models\Product', 'product_id');
    }

    public function entity(){

        return $this->belongsTo('App\models\Entity', 'entity_id');
    }


}
