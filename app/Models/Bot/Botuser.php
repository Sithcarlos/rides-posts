<?php

declare(strict_types=1);

namespace App\Models\Bot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Botuser extends Model
{
    /** @use HasFactory<\Database\Factories\Bot\BotuserFactory> */
    use HasFactory;
    //
    protected $fillable = [
        'id_usuario',
        'first_name',
        'username',
        'is_premium',
        'sw_ban',
    ];
    //
    protected function casts(): array
    {
        return [
            'is_premium' => 'boolean',
            'sw_ban' => 'boolean',
        ];
    }
}
