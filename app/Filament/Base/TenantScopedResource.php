<?php

namespace App\Filament\Base;

use App\Enums\RolesEnum;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;

abstract class TenantScopedResource extends Resource
{
    public static bool $isTenantScoped = true;

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        $user = auth()->user();

        if (
            static::$isTenantScoped &&
            ! collect(RolesEnum::elevated())
                ->some(fn (string $role) => $user?->hasRole($role))
        ) {
            return $query->whereBelongsTo(Filament::getTenant());
        }

        return $query;
    }
}
