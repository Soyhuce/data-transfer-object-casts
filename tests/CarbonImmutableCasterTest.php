<?php declare(strict_types=1);

use Carbon\CarbonImmutable;
use Carbon\Exceptions\InvalidFormatException;
use Soyhuce\DataTransferObjectCasts\CarbonImmutableCaster;

it('casts correctly CarbonImmutable values', function (mixed $input, mixed $output): void {
    $caster = new CarbonImmutableCaster();
    expect($caster->cast($input))->toEqual($output);
})->with([
    ['2022-08-11 14:44:45', CarbonImmutable::createFromFormat('!Y-m-d H:i:s', '2022-08-11 14:44:45')],
    [CarbonImmutable::createFromFormat('!Y-m-d H:i:s', '2022-08-11 14:44:45'), CarbonImmutable::createFromFormat('!Y-m-d H:i:s', '2022-08-11 14:44:45')],
    [null, null],
    [new stdClass(), new stdClass()],
]);

it('fails with incorrect values', function (mixed $input): void {
    $caster = new CarbonImmutableCaster();
    expect(fn () => $caster->cast($input))->toThrow(InvalidFormatException::class);
})->with([
    ['2022-08-11'],
    ['foo'],
]);

it('can define custom format', function (): void {
    $caster = new CarbonImmutableCaster([CarbonImmutable::class], '!Y-m-d');
    expect($caster->cast('2022-08-11'))->toEqual(CarbonImmutable::create(2022, 8, 11));
});
