<?php

namespace App\Job\Models;

use App\Base\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Job extends Model
{
    protected $table = 'jobs';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'job_type_id',
        'titulo',
        'descricao',
        'valor_hora'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function job_type(): HasOne
    {
        return $this->hasOne(JobType::class);
    }
}
