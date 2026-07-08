<?php

use App\Http\Controllers\Api\Admin\CompanyProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Admin Routes
|--------------------------------------------------------------------------
|
| Routes in this file MUST be authenticated.
| Used by CMS (admin) to manage data.
|
*/

Route::middleware('auth.api')->group(function () {

    // Company Profile
    Route::put('/company-profile', [CompanyProfileController::class, 'update']);

    // Nanti tambahkan yang lain:
    // Route::apiResource('services', ServiceController::class);
    // Route::apiResource('portfolios', PortfolioController::class);
    // Route::apiResource('blogs', BlogController::class);
    // dll.

});