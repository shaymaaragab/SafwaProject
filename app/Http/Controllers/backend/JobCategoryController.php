<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\JobCategoryRequest;
use App\models\Job_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobCategoryController extends AbstractController
{
    public function __construct(Job_category $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $jobCategory = $this->model->all();
        return View('backend.jobCategory.index' , compact('jobCategory'));
    }


    public function add(){

        return view('backend.jobCategory.add');

    }

    public function create(JobCategoryRequest $request){

        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('Job_categoryIndex');
    }

    public function edit($id){

        $jobCategory = $this->model->find($id);
        return view('backend.jobCategory.edit', compact('jobCategory'));
    }

    public function update($id, JobCategoryRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('Job_categoryIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('Job_categoryIndex');
    }
}
