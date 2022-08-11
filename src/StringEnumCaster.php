<?php declare(strict_types=1);

namespace Soyhuce\DataTransferObjectCasts;

use Spatie\DataTransferObject\Caster;
use StringBackedEnum;
use function is_string;

class StringEnumCaster implements Caster
{
    /**
     * @param array<class-string<StringBackedEnum>> $types
     */
    public function __construct(
        private array $types,
    ) {
    }

    public function cast(mixed $value): mixed
    {
        if (!is_string($value)) {
            return $value;
        }

        return $this->types[0]::from($value);
    }
}
