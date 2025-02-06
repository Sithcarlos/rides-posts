<?php

declare(strict_types=1);

namespace App\Servicios;
//
use SergiX44\Nutgram\Telegram\Types\User\User;
use App\Models\Bot\Botuser;

class BasicBot
{
    //
    static function registrar_nuevo_usuario(User $usuario): void
    {
        $u = new Botuser;
        $u->id_usuario = $usuario->id;
        $u->first_name = $usuario->first_name;
        $u->username = $usuario->username;
        $u->is_premium = $usuario->is_premium;
        $u->save();
    }
    //
    static function mostrar_usuario(int $id_usuario): Botuser
    {
        $u = Botuser::where('id_usuario', $id_usuario)->get();
        return $u;
    }
    //
    static function existe_usuario(int $id_usuario): bool
    {
        $u = Botuser::where('id_usuario', '=', $id_usuario)->get()->count();
        return (bool) $u;
    }
}
