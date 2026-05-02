<?php

namespace App\Providers;

// Ganti bagian ini:
use Illuminate\Support\Facades\Gate; // Gunakan Facade, bukan Illuminate\Auth\Access\Gate
use App\Models\User; // Pastikan Model User diimpor
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Sekarang Gate::define sudah bisa digunakan dengan aman
        Gate::define('view-student', function (User $user) {
            return in_array($user->role, ['admin', 'guest']);
        });

        Gate::define('store-student', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('edit-student', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('destroy-student', function (User $user) {
            return $user->role === 'admin';
        });
    }
}