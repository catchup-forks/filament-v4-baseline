<?php

namespace App\Filament\Base;

use App\Enums\RolesEnum;
use Filament\Facades\Filament;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;

abstract class TenantScopedResource extends Resource
{
    public static bool $isTenantScoped = true;

    public static function applyTenantScope(Builder $query): Builder
    {
        $user = auth()->user();

        if (
            static::$isTenantScoped &&
            ! in_array($user?->getRoleNames()?->first(), RolesEnum::elevated(), true)
        ) {
            return $query->whereBelongsTo(Filament::getTenant());
        }

        return $query;
    }
}
