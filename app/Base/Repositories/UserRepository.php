<?php

namespace App\Base\Repositories;

use App\Base\Models\User;
use App\Base\Models\UserRepositoryInterface;

class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    protected string $_model = User::class;
}
