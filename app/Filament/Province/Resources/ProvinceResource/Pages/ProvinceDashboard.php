<?php

namespace App\Filament\Province\Resources\ProvinceResource\Pages;

use App\Filament\Province\Resources\ProvinceResource;
use Filament\Resources\Pages\Page;

class ProvinceDashboard extends Page
{
    protected static string $resource = ProvinceResource::class;

    protected static string $view = 'filament.province.resources.province-resource.pages.province-dashboard';
}
