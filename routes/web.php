<?php

use App\Services\APIService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Visitors\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');
Route::get('problem/{problem}/loading', [LandingController::class, 'loading'])->name('loading');

Auth::routes();


Route::get('start', [LandingController::class, 'startPage'])->name('start-page');
Route::get('show/{problem}/result', [LandingController::class, 'result'])->name('show.result');
