<?php

namespace App\Providers;

use App\Interfaces\AuthServiceInterface;
use App\Interfaces\CompanyProfileRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\CompanyProfileRepository;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use Illuminate\Support\ServiceProvider;
use App\Repositories\AboutRepository;  
use App\Interfaces\AboutRepositoryInterface;   

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(CompanyProfileRepositoryInterface::class, CompanyProfileRepository::class);
        $this->app->bind(AboutRepositoryInterface::class, AboutRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Passport routes are loaded automatically by Passport service provider.
    }
}
