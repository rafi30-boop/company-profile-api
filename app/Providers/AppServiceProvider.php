<?php

namespace App\Providers;

use App\Interfaces\AuthServiceInterface;
use App\Interfaces\PortfolioRepositoryInterface;
use App\Interfaces\UserRepositoryInterface;
use App\Repositories\PortfolioRepository;
use App\Repositories\UserRepository;
use App\Services\AuthService;
use Illuminate\Support\ServiceProvider;
use Laravel\Passport\Passport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
        $this->app->bind(AuthServiceInterface::class, AuthService::class);
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Passport::routes();
    }
}
