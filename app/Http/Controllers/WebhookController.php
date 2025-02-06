<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\AlfaBot\Procesar;
use Illuminate\Http\JsonResponse;
use SergiX44\Nutgram\RunningMode\Webhook;
use Illuminate\Support\Facades\Log;
use SergiX44\Nutgram\Nutgram;

class WebhookController extends Controller
{
    //Recibe la peticion desde Telegram bot api
    public function __invoke(Nutgram $bot): void
    {
        $bot->setRunningMode(Webhook::class);
        Procesar::inicio($bot);
        $bot->run();
        Log::info(json_encode($bot->update()));
    }
    //Muestra informacion sobre el bot
    public function info(Nutgram $bot): JsonResponse
    {
        return response()->json($bot->getWebhookInfo());
    }
}
