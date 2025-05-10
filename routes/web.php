<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ScholarshipController;
use App\Http\Controllers\DiscussionController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', [AboutController::class, 'index']);
Route::get('/scholarships', [ScholarshipController::class, 'index']);
Route::get('/discussion', [DiscussionController::class, 'index']);

