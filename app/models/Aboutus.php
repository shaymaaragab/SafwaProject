<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aboutus extends Model
{

    use SoftDeletes;
    protected $table = "aboutus";
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
