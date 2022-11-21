<?php

namespace App\Job\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Job\Models\Job;
use App\Job\Models\JobRepositoryInterface;

class JobRepository extends BaseRepository implements JobRepositoryInterface
{
    protected string $_model = Job::class;
}
