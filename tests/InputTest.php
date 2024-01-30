<?php

use Filament\Forms\ComponentContainer;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use HasanAhani\FilamentOtpInput\Tests\Fixtures\Livewire;
use Livewire\Component;
use HasanAhani\FilamentOtpInput\Components\OtpInput;

use Illuminate\Support\Str;
use function Pest\Livewire\livewire;

it('can be rendered', function () {
    $field = (new OtpInput($name = Str::random()))
        ->numberInput($number = 5)
        ->container(ComponentContainer::make(Livewire::make()));

    expect($field)
        ->getStatePath()->toBe($name);

    expect($field)->getNumberInput()->toBe($number);
});

