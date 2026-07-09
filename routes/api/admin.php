<?php

use App\Http\Controllers\Api\Admin\AboutController;
use App\Http\Controllers\Api\Admin\CompanyProfileController;
use App\Http\Controllers\Api\Admin\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Admin\PortfolioController;
use App\Http\Controllers\Api\Admin\BlogController;
use App\Http\Controllers\Api\Admin\CategoryController;
use App\Http\Controllers\Api\Admin\ContactController;

// ============================================
// ADMIN ROUTES (Wajib Login)
// ============================================

Route::middleware('auth.api')->prefix('admin')->group(function () {

    // Company Profile
    Route::put('/company-profile', [CompanyProfileController::class, 'update']);

    // About
    Route::put('/about', [AboutController::class, 'update']);

    // Services (CRUD Admin)
    Route::get('/services', [ServiceController::class, 'index']);
    Route::get('/services/{id}', [ServiceController::class, 'show']);
    Route::post('/services', [ServiceController::class, 'store']);
    Route::put('/services/{id}', [ServiceController::class, 'update']);
    Route::delete('/services/{id}', [ServiceController::class, 'destroy']);
    // Portfolio (CRUD Admin)
    Route::get('/portfolios', [PortfolioController::class, 'index']);
    Route::get('/portfolios/{id}', [PortfolioController::class, 'show']);
    Route::post('/portfolios', [PortfolioController::class, 'store']);
    Route::put('/portfolios/{id}', [PortfolioController::class, 'update']);
    Route::delete('/portfolios/{id}', [PortfolioController::class, 'destroy']);

    // Blogs
    Route::get('/blogs', [BlogController::class, 'index']);
    Route::get('/blogs/{id}', [BlogController::class, 'show']);
    Route::post('/blogs', [BlogController::class, 'store']);
    Route::put('/blogs/{id}', [BlogController::class, 'update']);
    Route::delete('/blogs/{id}', [BlogController::class, 'destroy']);

    // Categories
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    Route::post('/categories', [CategoryController::class, 'store']);
    Route::put('/categories/{id}', [CategoryController::class, 'update']);
    Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

    Route::get('/contact-messages', [ContactController::class, 'index']);
    Route::get('/contact-messages/{id}', [ContactController::class, 'show']);
    Route::delete('/contact-messages/{id}', [ContactController::class, 'destroy']);
        

});