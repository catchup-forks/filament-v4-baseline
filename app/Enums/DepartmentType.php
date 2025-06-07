<?php

namespace App\Enums;

enum DepartmentType: string
{
    case MANAGEMENT = 'management';
    case SALES      = 'sales';
    case SUPPORT    = 'support';

    public static function values(): array
    {
        return array_column(self::cases(), 'value');
    }

    public function label(): string
    {
        return match ($this) {
            self::MANAGEMENT => 'Management',
            self::SALES      => 'Sales',
            self::SUPPORT    => 'Support',
        };
    }
}
