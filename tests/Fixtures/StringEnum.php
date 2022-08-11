<?php declare(strict_types=1);

namespace Soyhuce\DataTransferObjectCasts\Tests\Fixtures;

use Soyhuce\DataTransferObjectCasts\StringEnumCaster;
use Spatie\DataTransferObject\Attributes\CastWith;

#[CastWith(StringEnumCaster::class)]
enum StringEnum: string
{
    case ok = 'ok';
    case nok = 'nok';
}
