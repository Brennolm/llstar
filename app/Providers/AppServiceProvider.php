<?php

namespace App\Providers;

use App\Models\User;
use App\View\Composers\SidebarComposer;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     */
    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {

        View::composer('layouts.admin', SidebarComposer::class);

        Gate::define('role', function (User $user, string $role) {
            return $user->role->value === $role;
        });

    }

}