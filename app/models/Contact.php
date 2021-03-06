<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{

    use SoftDeletes;
    protected $table = "contact";
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
    protected $guarded = [
        'id',
    ];


    public function Entity(){

        return $this->belongsTo('App\models\Entity', 'entity_id');
    }
}
