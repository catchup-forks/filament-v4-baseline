<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        /*Filament::serving(function () {
            Log::info('just the user', [
                'user_id' => auth()->id(),
            ]);

            if ( ! auth()->check()) {
                Log::info('User not authenticated for Franchise Panel', [
                    'panel'   => Filament::getCurrentPanel(),
                    'user_id' => auth()->id(),
                    'roles'   => auth()->user()?->getRoleNames(),
                ]);
            } elseif ( ! auth()->user()?->canAccessPanel(filament()->getCurrentPanel())) {
                Log::info('User not authorized for Franchise Panel', [
                    'panel'   => Filament::getCurrentPanel(),
                    'user_id' => auth()->id(),
                    'roles'   => auth()->user()?->getRoleNames(),
                ]);
            }
        });*/
    }
}
