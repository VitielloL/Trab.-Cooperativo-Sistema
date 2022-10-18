<?php

namespace App\Repositories;

use App\Models\Profile;
use App\Models\ProfileRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
    protected string $_model = Profile::class;

    public function findByUserId(int $idUser): ?Model
    {
        return $this->_model::where('user_id', $idUser)->first();
    }
}
