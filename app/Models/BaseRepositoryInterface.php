<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

interface BaseRepositoryInterface
{
    public function save(Model $model): Model;
    public function find(int $id): ?Model;
    public function update(int $id, array $data): Model;
    public function delete(int $id): void;
}
