<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Applicant extends Model
{
    protected $table = "applicant";

   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];

    public function Job(){

        return $this->belongsTo('App\models\Job', 'job_id');
    }
}
