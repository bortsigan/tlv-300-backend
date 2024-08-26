<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhoisController;

Route::get('/whois', [WhoisController::class, 'getWhois']);
Route::post('/whois', [WhoisController::class, 'postWhois']);
