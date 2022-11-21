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

        dd('infex feito');
        //return view('', $baseInfo);
    }

    public function store(JobRequest $request)
    {
        dd($request->validated());
        //$idUser = auth()->user()->id;
        $newValues = $request->except('_token');
        //$newValues['user_id'] = $idUser;

        $newProperty = new Job($newValues);
        $newProperty->save();

        dd('store feito');
        //return redirect()->route('');
    }

    public function update(JobRequest $request, int $idJob)
    {
        $jobEntity = $this->jobRepository->find($idJob);
        $infos = json_decode($request->getContent(), true);

        foreach ($infos as $key => $info) {
            $jobEntity->$key = $info;
        }

        $jobEntity->save();

        dd('update feito');
        //return redirect()->route('');
    }


    public function delete(int $idJob)
    {
        $this->jobRepository->delete($idJob);

        dd('delete feito');
        //return redirect()->route('');
    }
}
