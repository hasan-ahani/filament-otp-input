<?php
declare(strict_types=1);

namespace HasanAhani\FilamentOtpInput\Tests;

use Filament\FilamentServiceProvider;
use Livewire\LivewireServiceProvider;
use HasanAhani\FilamentOtpInput\FilamentOtpInputServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;
class TestCase extends Orchestra
{
    protected $enablesPackageDiscoveries = true;

    protected function getPackageProviders($app): array
    {
        return [
            LivewireServiceProvider::class,
            FilamentServiceProvider::class,
            FilamentOtpInputServiceProvider::class,
        ];
    }

}
