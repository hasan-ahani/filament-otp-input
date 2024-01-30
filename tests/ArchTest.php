<?php

declare(strict_types=1);

it('will not use debugging functions')
    ->expect(['dd', 'dump', 'ray', 'var_dump', 'ddd'])
    ->each->not->toBeUsed();

test('strict types are used')
    ->expect('HasanAhani\FilamentOtpInput')
    ->toUseStrictTypes();

test('strict types are used in tests')
    ->expect('HasanAhani\FilamentOtpInput\Tests')
    ->toUseStrictTypes();

test('only otp input are put in the component directory')
    ->expect('HasanAhani\FilamentOtpInput\Components')
    ->toBeClasses();
