<?php

namespace App\Job\Policies;

use App\Base\Models\User;
use App\Job\Models\Job;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    public function update(User $user, Job $job)
    {
        return $user->id === $job->user_id;
    }

    public function destroy(User $user, Job $job)
    {
        return $user->id === $job->user_id;
    }
}
