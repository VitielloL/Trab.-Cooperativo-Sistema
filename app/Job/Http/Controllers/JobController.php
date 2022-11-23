<?php

namespace App\Job\Http\Controllers;

use App\Base\Http\Controllers\Controller;
use App\Job\Models\Job;
use App\Job\Models\JobRepositoryInterface;
use App\Job\Models\JobTypeRepositoryInterface;
use Illuminate\Http\Request;

class JobController extends Controller
{
    private JobRepositoryInterface $jobRepository;

    private JobTypeRepositoryInterface $jobTypeRepository;

    public function __construct
    (
        JobRepositoryInterface $jobRepository,
        JobTypeRepositoryInterface $jobTypeRepository
    )
    {
        $this->jobRepository = $jobRepository;
        $this->jobTypeRepository = $jobTypeRepository;
    }

    public function index()
    {
        $jobsEntity = $this->jobRepository->all();

        return view('jobs.index')->with('jobsEntity', $jobsEntity);
    }

    public function my() {
        $jobsEntity = $this->jobRepository->findBy([
            'exact' => [
                'user_id' => auth()->user()->id,
            ]
        ]);

        if (!empty($jobsEntity)) {
            return view('jobs.my')->with(
                'jobsEntity', $jobsEntity
            );
        } else {
            return redirect()->route('jobs');
        }
    }

    public function show(int $idJob) {
        $jobEntity = $this->jobRepository->find($idJob);

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
        $jobTypesEntity = $this->jobTypeRepository->all();
        if (!empty($jobEntity)) {
            $infos = array(
                'jobTypesEntity' => $jobTypesEntity,
                'jobsEntity' => $jobEntity
            );
            return view('jobs.edit')->with($infos);
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

    public function search(Request $request)
    {
        $titulo = $request->get('titulo');
        $descricao = $request->get('descricao');

        $jobsEntity = $this->jobRepository->findBy([
            'similar' => [
                'titulo' => $titulo,
                'descricao' => $descricao
            ]
        ]);

        return view('jobs.index')->with('jobsEntity', $jobsEntity);
    }
}
