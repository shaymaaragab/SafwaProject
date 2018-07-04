<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\models\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApplicantController extends AbstractController
{
    public function __construct(Applicant $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $applicants = $this->model->all();
        return View('backend.applicant.index' , compact('applicants'));
    }
	public function delete($id){
		$this->deleteIfExists($id);
		return redirect()->route('ApplicantIndex');
	}

}
