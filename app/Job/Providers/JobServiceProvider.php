<?php

namespace App\Job\Providers;

use App\Job\Models\JobRepositoryInterface;
use App\Job\Repositories\JobRepository;
use Illuminate\Support\ServiceProvider;

class JobServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(JobRepositoryInterface::class, JobRepository::class);
    }

    public function boot()
    {
        //
    }
}
