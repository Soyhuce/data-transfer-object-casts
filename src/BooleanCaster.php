<?php

declare(strict_types=1);

namespace Soyhuce\DataTransferObjectCasts;

use function is_bool;
use Spatie\DataTransferObject\Caster;

class BooleanCaster implements Caster
{
    public function cast(mixed $value): mixed
    {
        if (is_bool($value) || $value === null) {
            return $value;
        }

        return filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);
    }
}
