<?php

use App\AI\Chat;
use App\Http\Controllers\ChatController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app')
        ->with(
            ['appName' => config('app.name')]
        );
});

Route::post('/chat', [ChatController::class, 'chat']);
