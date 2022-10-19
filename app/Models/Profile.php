<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $table = 'profile';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'github',
        'profissao',
        'linkedin',
        'instagram',
        'cep',
        'estado',
        'cidade',
        'logradouro',
        'numero',
        'complemento',
        'foto'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
