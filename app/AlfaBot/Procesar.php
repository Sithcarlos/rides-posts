<?php

declare(strict_types=1);

namespace App\AlfaBot;
//
use App\Servicios\BasicBot;
use SergiX44\Nutgram\Nutgram;

class Procesar
{
    //
    static function inicio(Nutgram $bot)
    {
        //
        $bot->onCommand('start', function (Nutgram $bot) {
            if (BasicBot::existe_usuario($bot->userId())) {
                $bot->sendMessage($text = 'usuario previamente registrado', $chat_id = env('TG_CHAT_ID_ADMIN_MAIN'));
            } else {
                BasicBot::registrar_nuevo_usuario($bot->user());
                $bot->sendMessage($text = 'Se a registrado nuevo usuario= ' . $bot->user()->first_name . ' id=' . $bot->userId(), $chat_id = env('TG_CHAT_ID_ADMIN_MAIN'));
            }
        })->description('Comando de arranque');
    }
}
