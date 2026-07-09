<?php

use App\Http\Controllers\Api\Public\AboutController;
use App\Http\Controllers\Api\Public\CompanyProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Public Routes
|--------------------------------------------------------------------------
|
| Routes in this file do NOT require authentication.
| Used by website (frontend) to display data.
|
*/

Route::get('/company-profile', [CompanyProfileController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);