<?php

use App\Http\Controllers\Api\Public\AboutController;
use App\Http\Controllers\Api\Public\CompanyProfileController;
use App\Http\Controllers\Api\Public\ServiceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Public\PortfolioController;
use App\Http\Controllers\Api\Public\BlogController;
use App\Http\Controllers\Api\Admin\CategoryController; 
use App\Http\Controllers\Api\Public\ContactController;
// ============================================
// PUBLIC ROUTES (Tanpa Login)
// ============================================

// Company Profile
Route::get('/company-profile', [CompanyProfileController::class, 'index']);

// About
Route::get('/about', [AboutController::class, 'index']);

// Services
Route::get('/services', [ServiceController::class, 'index']);
Route::get('/services/{id}', [ServiceController::class, 'show']);

Route::get('/portfolios', [PortfolioController::class, 'index']);
Route::get('/portfolios/{slug}', [PortfolioController::class, 'show']);

Route::get('/blogs', [BlogController::class, 'index']);
Route::get('/blogs/{slug}', [BlogController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']); // Tambahkan use CategoryController

Route::post('/contact', [ContactController::class, 'store']);