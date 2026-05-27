<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessagesController;

// index: showの補助ページ
Route::get('/', [MessagesController::class, 'index']);

Route::resource('messages', MessagesController::class);
