<?php
namespace HasanAhani\FilamentOtpInput\Tests;

use HasanAhani\FilamentOtpInput\FilamentOtpInputServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
class TestCase extends Orchestra
{

    protected function getPackageProviders($app): array
    {
        return [
            FilamentOtpInputServiceProvider::class,
        ];
    }

}
