<?php

use App\Services\APIService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Visitors\LandingController;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Auth::routes();


Route::get('start', [LandingController::class, 'startPage'])->name('start-page');

Route::get('test',function(){
    $issue_type = "leak";
    $location = "الحمام";
    $leak_type = "ماء";
    
    $response = (new APIService())->fetchDataToModel($issue_type, $location, $leak_type);

    dd($response); // Dump and die to view the response
});
