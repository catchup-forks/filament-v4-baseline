<?php

namespace App\Enums;

enum RolesEnum: string
{
    case SUPERADMIN = 'superadmin';
    case ADMIN      = 'admin';
    case ASSISTANCE = 'assistance';
    case USERADMIN  = 'useradmin';
    case USER       = 'user';

    public static function all(): array
    {
        return array_column(self::cases(), 'value');
    }

    public static function labels(): array
    {
        return collect(self::cases())
            ->mapWithKeys(fn ($role) => [$role->value => $role->label()])
            ->toArray();
    }

    public static function elevated(): array
    {
        return [
            self::SUPERADMIN->value,
            self::ADMIN->value,
            self::ASSISTANCE->value,
        ];
    }

    public function label(): string
    {
        return match ($this) {
            static::SUPERADMIN => 'Super Administrator',
            static::ADMIN      => 'Administrator',
            static::ASSISTANCE => 'Assistance',
            static::USERADMIN  => 'User Administrator',
            static::USER       => 'User',
        };
    }
}
