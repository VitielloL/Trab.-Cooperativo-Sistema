<?php

namespace App\Profile\Repositories;

use App\Base\Repositories\BaseRepository;
use App\Profile\Models\Profile;
use App\Profile\Models\ProfileRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class ProfileRepository extends BaseRepository implements ProfileRepositoryInterface
{
    protected string $_model = Profile::class;

    public function findByUserId(int $idUser): ?Model
    {
        return $this->_model::where('user_id', $idUser)->first();
    }
}
