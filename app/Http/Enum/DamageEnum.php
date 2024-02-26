<?php

namespace App\Http\Enum;

enum DamageEnum: string
{
    case NA = 'n/a';
    case LIGHT_DAMAGE = 'light_damage';
    case DAMAGE = 'damage';
    case HEAVY_DAMAGE = 'heavy_damage';

    public static function label(self $value): string {
        return match ($value) {
            self::NA => 'N/A',
            self::LIGHT_DAMAGE => 'Light damage',
            self::DAMAGE => 'Damage',
            self::HEAVY_DAMAGE => 'Heavy damage',
        };
    }
}
