<?php

namespace App\Repositories;

use App\Models\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected string $_model;

    public function save(Model $model): Model
    {
        $model->save();
        return $model;
    }

    public function find(int $id): ?Model
    {
        return $this->_model::findOrFail($id);
    }

    public function update(int $id, array $data): Model
    {
        $model = $this->find($id);
        $model->update($data);
        return $model;
    }

    public function delete(int $id): void
    {
        $model = $this->find($id);
        $model->delete();
    }
}
