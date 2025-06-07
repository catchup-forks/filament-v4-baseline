<?php

namespace App\Filament\Province\Resources\MunicipalityResource\Pages;

use App\Filament\Province\Resources\MunicipalityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMunicipality extends EditRecord
{
    protected static string $resource = MunicipalityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
