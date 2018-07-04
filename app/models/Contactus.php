<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contactus extends Model
{
    use SoftDeletes;
    protected $table = "contactus";
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $guarded = [
        'id',
    ];


    public function Entity(){

        return $this->belongsTo('App\models\Entity', 'entity_id');
    }

    public function team(){

        return $this->belongsTo('App\models\Team', 'team_id');
    }

    public function city(){

        return $this->belongsTo('App\models\City', 'city_id');
    }
}
