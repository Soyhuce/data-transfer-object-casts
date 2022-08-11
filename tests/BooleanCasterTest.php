<?php

declare(strict_types=1);

use Soyhuce\DataTransferObjectCasts\BooleanCaster;

it('casts correctly values', function (mixed $input, ?bool $output): void {
    $caster = new BooleanCaster();
    expect($caster->cast($input))->toBe($output);
})->with([
    [true, true],
    [false, false],
    [null, null],
    ['true', true],
    ['1', true],
    ['on', true],
    ['', false],
    ['false', false],
    ['0', false],
    ['off', false],
    [1, true],
    [0, false],
    ['foo', null],
    [55, null],
    [[], null],
    [new stdClass(), null],
]);
