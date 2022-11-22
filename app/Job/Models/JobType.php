<?php

namespace App\Job\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class JobType extends Model
{
    protected $table = 'job_types';
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];

    public function job(): HasOne
    {
        return $this->hasOne(Job::class);
    }
}
