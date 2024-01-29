<?php
declare(strict_types=1);

namespace HasanAhani\FilamentOtpInput\Tests;

use HasanAhani\FilamentOtpInput\FilamentOtpInputServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
class TestCase extends Orchestra
{
    protected $enablesPackageDiscoveries = true;

    protected function getPackageProviders($app): array
    {
        return [
            FilamentOtpInputServiceProvider::class,
        ];
    }

}
