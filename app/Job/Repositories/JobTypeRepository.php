<?php

namespace App\Job\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Job\Models\JobType;
use App\Job\Models\JobTypeRepositoryInterface;

class JobTypeRepository extends BaseRepository implements JobTypeRepositoryInterface
{
    protected string $_model = JobType::class;
}
