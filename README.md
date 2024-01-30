# Filament otp input

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![Total Downloads](https://img.shields.io/packagist/dt/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/hasan-ahani/filament-otp-input?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![License](https://img.shields.io/github/license/hasan-ahani/filament-otp-input?style=flat-square)](https://github.com/hasan-ahani/filament-otp-input/blob/main/LICENSE.md)

![Preview](https://raw.githubusercontent.com/hasan-ahani/filament-otp-input/master/preview.png)


`filament-otp-input` is a package built for [Filament](https://filamentphp.com) that provides an enhanced password input form component that offers you the ability to add the following
features to your password inputs:

-   Customize number of input
-   Action after filling the code
-   Next entry after filling
-   Previous entry with backspace



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

## Number input
If you want to change number input, The following code will render the inputs of use number:
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
                ->label('Otp'),
        ]);
}
```
The code above will render a otp input  inside the form.

![Otp input number](https://raw.githubusercontent.com/hasan-ahani/filament-otp-input/master/docs/otp-number.png)

## Get Code
If you want to get code after filled, The following this:
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

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
