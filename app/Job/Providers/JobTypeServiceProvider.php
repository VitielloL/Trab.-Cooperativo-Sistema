<?php

namespace App\Job\Providers;

use App\Job\Models\JobTypeRepositoryInterface;
use App\Job\Repositories\JobTypeRepository;
use Illuminate\Support\ServiceProvider;

class JobTypeServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(JobTypeRepositoryInterface::class, JobTypeRepository::class);
    }

    public function boot()
    {
        //
    }
}
