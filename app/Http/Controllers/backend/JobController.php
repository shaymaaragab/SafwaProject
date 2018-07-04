<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\AbstractController;
use App\Http\Requests\JobRequest;
use App\models\Job;
use App\models\Entity;
use App\models\Job_category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends AbstractController
{
    public function __construct(Job $model)
    {
        parent::__construct($model);
    }

    public function index(){

        $jobs = $this->model->all();
        return View('backend.job.index' , compact('jobs'));
    }


    public function add(){

        $entity = $this->getEntity();
        $jobCategory = $this->getJobCategory();
        return view('backend.job.add',compact('entity','jobCategory'));

    }

    public function create(JobRequest $request){
//		Job::create($request->all());
//    	dd($request->all());
//	    $request
        $this->addOrUpdate(null  , $request->all());
        return redirect()->route('JobIndex');
    }

    public function edit($id){

        $job = $this->model->find($id);
        $entity = $this->getEntity();
        $jobCategory = $this->getJobCategory();
        return view('backend.job.edit', compact('job','entity','jobCategory'));
    }

    public function update($id, JobRequest $request)
    {
        $this->addOrUpdate($id, $request->all());
        return redirect()->route('JobIndex');
    }

    public function delete($id){
        $this->deleteIfExists($id);
        return redirect()->route('JobIndex');
    }

    public function view($id){

        $job = $this->model->find($id);
        return view('backend.job.view', compact('job'));

    }


    public function getEntity(){

        $entity = Entity::all();

        $allEntity = [];

        foreach ($entity as $ent){

            $allEntity[$ent->id]= $ent['name'];
        }
        return $allEntity;
    }

    public function getJobCategory(){

        $jobCats = Job_category::all();

        $allJobCats = [];

        foreach ($jobCats as $jobCat){

            $allJobCats[$jobCat->id]= $jobCat['name_en'];
        }
        return $allJobCats;
    }
    public function toggle(Request $request)
    {
		$input=$request->all();
		$job=Job::find($input['id'])->update($input);
	    return \Response::json(array('sucess' => 'yes'));

    }
}
