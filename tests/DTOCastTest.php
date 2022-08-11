<?php declare(strict_types=1);

use Carbon\CarbonImmutable;
use Soyhuce\DataTransferObjectCasts\Tests\Fixtures\StringEnum;
use Soyhuce\DataTransferObjectCasts\Tests\Fixtures\TestDTO;

it('correctly casts inputs', function (): void {
    $dto = new TestDTO(
        bool: 'true',
        dateTime: '2022-08-11 14:44:45',
        nullableDateTime: null,
        date: '2022-08-01',
        stringEnum: 'ok',
        nullableStringEnum: null,
    );

    expect($dto)
        ->bool->toBeTrue()
        ->dateTime->toEqual(CarbonImmutable::createFromFormat('!Y-m-d H:i:s', '2022-08-11 14:44:45'))
        ->nullableDateTime->toBeNull()
        ->date->toEqual(CarbonImmutable::createFromFormat('!Y-m-d', '2022-08-01'))
        ->stringEnum->toBe(StringEnum::ok)
        ->nullableStringEnum->toBeNull();
});
