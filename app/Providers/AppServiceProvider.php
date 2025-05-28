<?php

namespace App\Providers;

use Illuminate\Auth\Events\Attempting;
use Illuminate\Auth\Events\Failed;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void {}

    public function boot(): void
    {
        \Illuminate\Support\Facades\Event::listen(\Illuminate\Auth\Events\Failed::class, function ($event) {
            Log::debug('Auth Failed:', [
                'email' => $event->credentials['email'] ?? null,
                'guard' => auth()->getDefaultDriver(),
            ]);
        });

        Event::listen(Attempting::class, function ($event) {
            Log::debug('Attempting', [
                'guard' => auth()->getDefaultDriver(),
                'email' => $event->credentials['email'] ?? null,
            ]);
        });

        Event::listen(Failed::class, function ($event) {
            Log::debug('Failed', [
                'guard' => auth()->getDefaultDriver(),
                'email' => $event->credentials['email'] ?? null,
                'user'  => optional($event->user)->email,
            ]);
        });

        Event::listen(Login::class, function ($event) {
            Log::debug('Login', [
                'guard' => auth()->getDefaultDriver(),
                'email' => $event->user->email ?? null,
            ]);
        });
    }
}
