<?php

declare(strict_types=1);

use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Livewire\Component;
use HasanAhani\FilamentOtpInput\Components\OtpInput;

use function Pest\Livewire\livewire;

it('can be rendered', function () {
    $component = new class extends Component implements HasActions, HasForms
    {
        use InteractsWithActions;
        use InteractsWithForms;

        public function form(Form $form): Form
        {
            return $form
                ->schema([
                    OtpInput::make('otp')
                        ->numberInput(5),
                ]);
        }

        public function render(): string
        {
            return <<<'HTML'
            <div>{{ $this->form }}</div>
            HTML;
        }
    };

    livewire($component::class)->assertSuccessful();
});
