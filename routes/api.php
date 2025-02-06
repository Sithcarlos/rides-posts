<?php

use App\Http\Controllers\WebhookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
//
Route::get('/webhook', [WebhookController::class, 'info'])->name('webhook.info');
Route::post('/webhook', [WebhookController::class, '__invoke'])->name('webhook');
