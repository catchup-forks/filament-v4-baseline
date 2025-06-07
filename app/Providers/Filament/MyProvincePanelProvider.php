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

class MyProvincePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('province')
            ->path('province')
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
                    50  => '#FFF5F7',  // soft blush
                    100 => '#FFE3E9',  // pale rose
                    200 => '#FBB8C2',  // light pink-maroon
                    300 => '#F2889A',  // dusty rose
                    400 => '#D45C74',  // muted crimson
                    500 => '#A63A59',  // true maroon
                    600 => '#842F49',  // deep maroon
                    700 => '#66253B',  // burgundy
                    800 => '#4D1B2F',  // rich wine
                    900 => '#371221',  // dark plum
                    950 => '#230A14',  // almost-black maroon
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
            ->discoverResources(in: app_path('Filament/Province/Resources'), for: 'App\\Filament\\Province\\Resources')
            ->discoverPages(in: app_path('Filament/Province/Pages'), for: 'App\\Filament\\Province\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Province/Widgets'), for: 'App\\Filament\\Province\\Widgets')
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
        //->tenant(Franchise::class, slugAttribute: 'slug');
    }
}
