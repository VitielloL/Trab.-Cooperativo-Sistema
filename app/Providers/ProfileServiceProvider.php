<?php

namespace App\Providers;

use App\Models\ProfileRepositoryInterface;
use App\Repositories\ProfileRepository;
use Illuminate\Support\ServiceProvider;

class ProfileServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind(ProfileRepositoryInterface::class, ProfileRepository::class);
    }

    public function boot()
    {
        //
    }
}
