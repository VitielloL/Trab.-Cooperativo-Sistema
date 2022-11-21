<?php

namespace App\Job\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Job\Models\JobRepositoryInterface;
use App\Job\Models\JobType;

class JobTypeRepository extends BaseRepository implements JobRepositoryInterface
{
    protected string $_model = JobType::class;
}
