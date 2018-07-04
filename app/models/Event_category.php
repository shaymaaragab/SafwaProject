<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Event_category extends Model
{
	protected $table = "event_category";

	   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];
	
    public function Event(){

        return $this->hasMany('App\models\Event', 'eventcate_id');
    }
}
