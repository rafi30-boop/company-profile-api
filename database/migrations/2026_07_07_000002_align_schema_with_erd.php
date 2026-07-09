<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('about') && !Schema::hasTable('about')) {
            Schema::rename('about', 'about');
        }

        if (Schema::hasTable('services')) {
            Schema::table('services', function (Blueprint $table) {
                $table->string('slug')->nullable(false)->change();
            });
        }

        if (Schema::hasTable('portfolios')) {
            Schema::table('portfolios', function (Blueprint $table) {
                $table->string('slug')->nullable(false)->change();
            });
        }

        if (Schema::hasTable('portfolio_images')) {
            Schema::table('portfolio_images', function (Blueprint $table) {
                $table->index('portfolio_id');
            });
        }

        if (Schema::hasTable('blogs')) {
            Schema::table('blogs', function (Blueprint $table) {
                $table->index('category_id');
                $table->index('status');
                $table->index('published_at');
            });
        }

        if (Schema::hasTable('contact_messages')) {
            Schema::table('contact_messages', function (Blueprint $table) {
                $table->index('is_read');
                $table->index('created_at');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('about') && !Schema::hasTable('about')) {
            Schema::rename('about', 'about');
        }
    }
};
