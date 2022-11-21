<?php

namespace App\Profile\Models;

use App\Base\Models\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

interface ProfileRepositoryInterface extends BaseRepositoryInterface
{
    public function findByUserId(int $idUser): ?Model;
}
