<?php

namespace App\Models\Concerns;

use App\Enums\RolesEnum;
use App\Models\Franchise;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait BelongsToFranchise
{
    public static function bootBelongsToFranchise(): void
    {
        static::creating(static function ($model) {
            if ( ! $model->franchise_id) {
                $model->franchise_id = static::resolveDefaultFranchiseId();
            }
        });
    }

    public function franchise(): BelongsTo
    {
        return $this->belongsTo(Franchise::class);
    }

    protected static function resolveDefaultFranchiseId(): ?int
    {
        $user = auth()->user();

        if ($user?->hasAnyRole(RolesEnum::elevated())) {
            return null;
        }

        return session('active_franchise_id') ?? auth()->user()?->franchises()->first()?->id;
    }
}
