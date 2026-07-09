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
use App\Interfaces\ServiceRepositoryInterface; 
use App\Repositories\ServiceRepository;     
use App\Interfaces\PortfolioRepositoryInterface; 
use App\Repositories\PortfolioRepository;      
use App\Interfaces\BlogRepositoryInterface;
use App\Interfaces\CategoryRepositoryInterface;
use App\Repositories\BlogRepository;
use App\Repositories\CategoryRepository;
use App\Interfaces\ContactRepositoryInterface;
use App\Repositories\ContactRepository;


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
        $this->app->bind(ServiceRepositoryInterface::class, ServiceRepository::class);
        $this->app->bind(PortfolioRepositoryInterface::class, PortfolioRepository::class);
        $this->app->bind(BlogRepositoryInterface::class, BlogRepository::class);
        $this->app->bind(CategoryRepositoryInterface::class, CategoryRepository::class);
        $this->app->bind(ContactRepositoryInterface::class, ContactRepository::class);

    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Passport routes are loaded automatically by Passport service provider.
    }
}
