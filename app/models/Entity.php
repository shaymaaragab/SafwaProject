<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

 
class Entity extends Model
{

    use SoftDeletes;
    protected $table = "entity";
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $guarded = [
        'id',
    ];

    public function aboutus(){

        return $this->hasMany('App\models\Aboutus', 'entity_id');
    }

    public function Slider(){

        return $this->hasMany('App\models\Slider', 'entity_id');
    }

    public function Team(){

        return $this->hasMany('App\models\Team', 'entity_id');
    }

    public function Contact(){

        return $this->hasMany('App\models\Contact', 'entity_id');
    }

    public function Job(){

        return $this->hasMany('App\models\Job', 'entity_id');
    }

    public function Product(){

        return $this->belongsToMany('App\models\Product', 'product_entity','entity_id','product_id');
    }

    public function Branch(){

        return $this->hasMany('App\models\Branch', 'entity_id');
    }

    public function Product_entity(){

        return $this->hasMany('App\models\Product_entity', 'entity_id');
    }
}
