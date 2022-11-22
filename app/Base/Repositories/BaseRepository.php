<?php

namespace App\Base\Repositories;

use App\Base\Models\BaseRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class BaseRepository implements BaseRepositoryInterface
{
    protected string $_model;

    public function all(): Collection
    {
        return $this->_model::all();
    }

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

    public function findBy(array $filters): Collection
    {
        $query = $this->_model::query();

        foreach ($filters as $key => $filter) {
            $query->where($key, $filter);
        }

        return $query->get();
    }
}
