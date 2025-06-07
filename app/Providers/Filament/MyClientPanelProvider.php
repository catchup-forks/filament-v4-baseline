<?php

namespace App\Providers\Filament;

use Filament\FontProviders\GoogleFontProvider;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class MyClientPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('clients')
            ->path('clients')
            ->login()
            ->passwordReset()
            ->emailVerification()
            ->unsavedChangesAlerts()
            ->sidebarCollapsibleOnDesktop()
            ->font(
                'Poppins',
                provider: GoogleFontProvider::class,
            )
            ->colors([
                'primary' => [
                    50  => '#F8FAFC',  // lightest slate
                    100 => '#F1F5F9',  // very pale slate
                    200 => '#E2E8F0',  // soft slate gray
                    300 => '#CBD5E1',  // light slate gray
                    400 => '#94A3B8',  // medium-light slate
                    500 => '#64748B',  // true slate
                    600 => '#475569',  // deep slate
                    700 => '#334155',  // darker slate
                    800 => '#1E293B',  // very dark slate
                    900 => '#0F172A',  // almost-black slate
                    950 => '#020617',  // pure black with slate tint
                ],
                'curious' => [
                    50  => '#F2F7FD',
                    100 => '#E3EFFB',
                    200 => '#C1DFF6',
                    300 => '#8FC0EE',
                    400 => '#429AE1',
                    500 => '#2684D1',
                    600 => '#1868B1',
                    700 => '#145390',
                    800 => '#154777',
                    900 => '#113153',
                    950 => '#0F2742',
                ],
                'darkious' => [
                    50  => '#CCE0FF',
                    100 => '#99B3EB',
                    200 => '#6696D6',
                    300 => '#2D6BB8',
                    400 => '#004DB8',
                    500 => '#003F99',
                    600 => '#002F7A',
                    700 => '#00265F',
                    800 => '#00204F',
                    900 => '#001B3E',
                    950 => '#00102B',
                ],
                'emerald' => [
                    50  => '#ECFDF5',
                    100 => '#D1F8E4',
                    200 => '#A8ECCD',
                    300 => '#6FD9AE',
                    400 => '#3CBF8A',
                    500 => '#30A46B',
                    600 => '#258651',
                    700 => '#1D6840',
                    800 => '#165231',
                    900 => '#0F3E25',
                    950 => '#0A2917',
                ],
            ])
            ->discoverResources(in: app_path('Filament/Clients/Resources'), for: 'App\\Filament\\Clients\\Resources')
            ->discoverPages(in: app_path('Filament/Clients/Pages'), for: 'App\\Filament\\Clients\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Clients/Widgets'), for: 'App\\Filament\\Clients\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
