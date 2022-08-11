<?php

declare(strict_types=1);

use Soyhuce\DataTransferObjectCasts\StringEnumCaster;
use Soyhuce\DataTransferObjectCasts\Tests\Fixtures\StringEnum;

it('casts correctly values', function (mixed $input, mixed $output): void {
    $caster = new StringEnumCaster([StringEnum::class]);
    expect($caster->cast($input))->toBe($output);
})->with([
    ['ok', StringEnum::ok],
    ['nok', StringEnum::nok],
    [StringEnum::ok, StringEnum::ok],
    [null, null],
    [true, true],
    [55, 55],
]);

it('fails with incorrect values', function (): void {
    $caster = new StringEnumCaster([StringEnum::class]);
    expect(fn () => $caster->cast('foo'))->toThrow(ValueError::class);
});
