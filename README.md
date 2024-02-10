# Filament One-Time Passcode (OTP) Input Form Component

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![Total Downloads](https://img.shields.io/packagist/dt/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/hasan-ahani/filament-otp-input?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
![Tests](https://github.com/hasan-ahani/filament-otp-input/workflows/Tests/badge.svg?style=flat-square)
[![License](https://img.shields.io/github/license/hasan-ahani/filament-otp-input?style=flat-square)](https://github.com/hasan-ahani/filament-otp-input/blob/main/LICENSE.md)

<img class="filament-hidden" src="https://raw.githubusercontent.com/hasan-ahani/filament-otp-input/master/docs/thumbnail.jpg" alt="One-Time Passcode (OTP) input for Filament" />

`filament-otp-input` is a package built for [Filament](https://filamentphp.com) that provides a One-Time Passcode (OTP) input form component that offers you the ability to add the following features:

-   Customize the number of inputs
-   Perform an action after filling the code
-   Move to the next input after filling
-   Move to the previous input with backspaces



## Installation

You can install the package via composer:

```bash
composer require hasan-ahani/filament-otp-input
```

## Usage
Inside a form schema, you can use the Otp input like this:
```php
use HasanAhani\FilamentOtpInput\Components;
use Filament\Forms\Form;

public function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            OtpInput::make('otp')
                ->label('Otp'),
        ]);
}
```
The code above will render a otp input inside the form.

 ![Otp input](https://raw.githubusercontent.com/hasan-ahani/filament-otp-input/master/docs/otp.png)

## Number inputs
If the number of entries you want is less or more than the default 4 numbers, you can change it according to the example below
```php
use HasanAhani\FilamentOtpInput\Components;
use Filament\Forms\Form;

public function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            OtpInput::make('otp')
                ->numberInput(6)
                ->label('Otp'),
        ]);
}
```
The above code creates 6 inputs for entering the OTP code.

![Otp input number](https://raw.githubusercontent.com/hasan-ahani/filament-otp-input/master/docs/otp-number.png)

## Get Code
If you need to receive the code after entering it completely, proceed as in the example below
```php
use HasanAhani\FilamentOtpInput\Components;
use Filament\Forms\Form;

public function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            OtpInput::make('otp')
                ->numberInput(8)
                ->afterStateUpdated(function (string $state){
                    dd($state);
                    // submit form or save record
                })
                ->label('Otp'),
        ]);
}
```


## Input type
By default, the input type is set to "number". If you need to change it to "password" or "text", you can use the following methods:
```php
use HasanAhani\FilamentOtpInput\Components;
use Filament\Forms\Form;

public function form(Form $form): Form
{
    return $form
        ->schema([
            // ...
            OtpInput::make('otp')
                ->password()
                // or
                ->text()
                ->label('Otp'),
        ]);
}
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](https://github.com/hasan-ahani/filament-otp-input/blob/master/CHANGELOG.md) for more information on what has changed recently.

## Credits

- [Hasan Ahani](https://github.com/hasan-ahani)
- [All Contributors](https://github.com/hasan-ahani/filament-otp-input/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/hasan-ahani/blob/master/LICENSE.md) for more information.
