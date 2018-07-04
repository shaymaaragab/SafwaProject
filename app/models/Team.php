<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{


    use SoftDeletes;
    protected $table = "team";
    public $timestamps = true;
    protected $dates = ['deleted_at'];
    protected $primaryKey = "id";
	protected $guarded = [
        'id',
    ];
    
    public function Entity(){

        return $this->belongsTo('App\models\Entity', 'entity_id');
    }
	public function Member(){

		return $this->hasMany('App\models\Member', 'album_id');
	}
}
