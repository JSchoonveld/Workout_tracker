<?php

namespace App\Enums;

use Spatie\Enum\Enum;

/**
 * @method static self FREE_WEIGHT()
 * @method static self MACHINE()
 */
class ExerciseTypeEnum extends Enum
{
    protected static function values(): array
    {
        return [
            'FREE_WEIGHT' => 1,
            'MACHINE' => 2,
        ];
    }
}
