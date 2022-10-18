<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

interface ProfileRepositoryInterface extends BaseRepositoryInterface
{
    public function findByUserId(int $idUser): ?Model;
}
