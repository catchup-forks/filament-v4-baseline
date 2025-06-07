<?php

namespace App\Providers\Filament;

use App\Models\Franchise;
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

class MyFranchisePanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('franchise')
            ->path('franchise')
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
                    50  => '#FFFFFF',  // white
                    100 => '#99FFF2',  // pale aqua
                    200 => '#5CFFD6',  // bright turquoise
                    300 => '#32C0A9',  // mid-teal
                    400 => '#1B887F',  // deeper teal
                    500 => '#060809',  // almost-black
                    600 => '#4D4D4D',  // dark gray
                    700 => '#3A3A3A',  // charcoal variant
                    800 => '#2C2C2C',  // near black
                    900 => '#1A1A1A',  // darkest gray-black
                    950 => '#0B0B0B',  // pure black accent
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
            ->discoverResources(in: app_path('Filament/Franchise/Resources'), for: 'App\\Filament\\Franchise\\Resources')
            ->discoverPages(in: app_path('Filament/Franchise/Pages'), for: 'App\\Filament\\Franchise\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Franchise/Widgets'), for: 'App\\Filament\\Franchise\\Widgets')
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
            ])
            ->tenant(Franchise::class, slugAttribute: 'slug');
    }
}
