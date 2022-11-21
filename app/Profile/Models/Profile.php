<?php

namespace App\Profile\Models;

use App\Base\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Profile extends Model
{
    protected $table = 'profiles';
    public $timestamps = false;

    protected $fillable = [
        'user_id',
        'github',
        'profissao',
        'linkedin',
        'instagram',
        'site',
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
