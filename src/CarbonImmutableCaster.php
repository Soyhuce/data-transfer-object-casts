<?php declare(strict_types=1);

namespace Soyhuce\DataTransferObjectCasts;

use Carbon\CarbonImmutable;
use Spatie\DataTransferObject\Caster;
use function is_string;

class CarbonImmutableCaster implements Caster
{
    /**
     * @phpstan-param array<class-string> $types
     */
    public function __construct(
        public array $types = [CarbonImmutable::class],
        public string $format = '!Y-m-d H:i:s',
    ) {
    }

    public function cast(mixed $value): mixed
    {
        if (!is_string($value)) {
            return $value;
        }

        return CarbonImmutable::createFromFormat($this->format, $value);
    }
}
