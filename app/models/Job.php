<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Job extends Model
{

	protected $table = "job";


   use SoftDeletes;
   public $timestamps = true;
   protected $dates = ['deleted_at'];
   protected $primaryKey = "id";
   protected $guarded = [
       'id',
   ];

    public function Job_category(){

        return $this->belongsTo('App\models\Job_category', 'jobcat_id');
    }

    public function Entity(){

        return $this->belongsTo('App\models\Entity', 'entity_id');
    }

    
    public function Applicant(){

        return $this->hasMany('App\models\Applicant', 'job_id');
    }

}
