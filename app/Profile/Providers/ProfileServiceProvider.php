<?php

namespace App\Profile\Providers;

use App\Profile\Models\ProfileRepositoryInterface;
use App\Profile\Repositories\ProfileRepository;
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
