<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ConfigServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        // $config = [
        //     'title' => 'Home Page',
        //     'year' => '2024',
        //     'author' => 'John Doe',
        //     'theme' => 'light',
        // ];

        View::composer(['*'], function($view) {
            // Example shared data (uncomment and modify as needed)
            // $menu = [
            //     'Home' => '/',
            //     'About' => '/about',
            //     'Contact' => '/contact',
            // ];
            // view()->share('menu', $menu);
        });
        }

    }
