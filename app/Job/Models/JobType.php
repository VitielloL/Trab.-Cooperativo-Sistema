<?php

namespace App\Job\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobType extends Model
{
    protected $table = 'job_types';
    public $timestamps = false;

    protected $fillable = [
        'nome'
    ];

    public function job(): BelongsTo
    {
        return $this->belongsTo(Job::class);
    }
}
