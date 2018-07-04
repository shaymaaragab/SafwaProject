<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job_category extends Model
{
	protected $table = "job_category";

   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];
    public function Job(){

        return $this->hasMany('App\models\Job', 'jobcat_id');
    }
}
