<?php

namespace App\Job\Http\Controllers;

use App\Base\Http\Controllers\Controller;
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

    public function my() {
        $jobsEntity = $this->jobRepository->findBy([
            'user_id' => auth()->user()->id
        ]);

        if (!empty($jobsEntity)) {
            return view('jobs.my')->with(
                'jobsEntity', $jobsEntity
            );
        } else {
            return redirect()->route('jobs');
        }
    }

    public function show(int $id) {
        $jobEntity = $this->jobRepository->find($id);

        if (!empty($jobEntity)) {
            return view('jobs.showMore')->with('jobEntity', $jobEntity);
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

    public function edit(int $idJob) {
        $jobEntity = $this->jobRepository->find($idJob);
        $this->authorize('update', $jobEntity);

        if (!empty($jobEntity)) {
            return view('jobs.edit')->with('jobsEntity', $jobEntity);
        } else {
            return redirect()->route('jobs');
        }
    }

    public function update(Request $request, int $idJob)
    {
        $infos = $request->except('_token');
        $this->jobRepository->update($idJob, $infos);

        return redirect()->route('jobs');
    }

    public function destroy(int $idJob)
    {
        $jobEntity = $this->jobRepository->find($idJob);
        $this->authorize('destroy', $jobEntity);

        $this->jobRepository->delete($idJob);
        return redirect()->route('jobs');
    }
}
