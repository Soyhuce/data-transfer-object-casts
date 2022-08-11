<?php declare(strict_types=1);

namespace Soyhuce\DataTransferObjectCasts\Tests\Fixtures;

use Carbon\CarbonImmutable;
use Soyhuce\DataTransferObjectCasts\BooleanCaster;
use Soyhuce\DataTransferObjectCasts\CarbonImmutableCaster;
use Spatie\DataTransferObject\Attributes\CastWith;
use Spatie\DataTransferObject\Attributes\DefaultCast;
use Spatie\DataTransferObject\DataTransferObject;

#[DefaultCast('bool', BooleanCaster::class)]
#[DefaultCast(CarbonImmutable::class, CarbonImmutableCaster::class)]
class TestDTO extends DataTransferObject
{
    public bool $bool;

    public CarbonImmutable $dateTime;

    public ?CarbonImmutable $nullableDateTime;

    #[CastWith(CarbonImmutableCaster::class, '!Y-m-d')]
    public CarbonImmutable $date;

    public StringEnum $stringEnum;

    public ?StringEnum $nullableStringEnum;
}
