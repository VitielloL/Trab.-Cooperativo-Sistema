<?php

namespace App\Job\Http\Controllers;

use App\Base\Http\Controllers\Controller;
use App\Job\Http\Requests\JobRequest;
use App\Job\Models\Job;
use App\Job\Models\JobRepositoryInterface;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private JobRepositoryInterface $jobRepository;

    public function __construct
    (
        JobRepositoryInterface $jobRepository
    )
    {
        $this->jobRepository = $jobRepository;
    }

    public function index()
    {
        $jobsEntity = $this->jobRepository->all();

        $baseInfo = array(
            'jobsEntity' => $jobsEntity
        );
        return view('jobs.index', $baseInfo);
    }

    public function show(int $id) {
        $jobsEntity = $this->jobRepository->find($id);

        if (!empty($jobsEntity)) {
            return view('jobs.showMore')->with('jobsEntity', $jobsEntity);
        } else {
            return redirect()->route('jobs');
        }
    }
    public function create () {
        return view('jobs.create');
    }

    public function store(Request $request)
    {
        $idUser = auth()->user()->id;
        $newValues = $request->except('_token');
        $newValues['user_id'] = $idUser;

        $newProperty = new Job($newValues);
        $newProperty->save();

        return redirect()->route('jobs');
    }

    public function edit(int $id) {
        $jobsEntity = $this->jobRepository->find($id);

        if (!empty($jobsEntity)) {
            return view('jobs.edit')->with('jobsEntity', $jobsEntity);
        } else {
            return redirect()->route('jobs');
        }
    }

    public function update(Request $request, int $idJob)
    {
        $jobEntity = $this->jobRepository->find($idJob);
        $infos = $request->except('_token');
        //$infos = json_decode($newValues, true);

        foreach ($infos as $key => $info) {
            $jobEntity->$key = $info;
        }

        $jobEntity->save();

        return redirect()->route('jobs');
    }

    public function delete(int $idJob)
    {
        $this->jobRepository->delete($idJob);
        return redirect()->route('jobs');
    }
}
