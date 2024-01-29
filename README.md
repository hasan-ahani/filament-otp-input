# Filament otp input

[![Latest Version on Packagist](https://img.shields.io/packagist/v/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
![Tests](https://github.com/hasan-ahani/filament-otp-input/workflows/Tests/badge.svg?style=flat-square)
[![Total Downloads](https://img.shields.io/packagist/dt/hasan-ahani/filament-otp-input.svg?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/hasan-ahani/filament-otp-input?style=flat-square)](https://packagist.org/packages/hasan-ahani/filament-otp-input)
[![License](https://img.shields.io/github/license/hasan-ahani/filament-otp-input?style=flat-square)](https://github.com/hasan-ahani/filament-otp-input/blob/main/LICENSE.md)

![social image](https://banners.beyondco.de/Filament%20Password%20Input.png?theme=light&packageManager=composer+require&packageName=rawilk%2Ffilament-password-input&pattern=architect&style=style_1&description=Enhanced+password+input+component+for+filament.&md=1&showWatermark=0&fontSize=100px&images=lock-closed)


`filament-otp-input` is a package built for [Filament](https://filamentphp.com) that provides an enhanced password input form component that offers you the ability to add the following
features to your password inputs:

-   Reveal password toggle
-   Copy to clipboard
-   Generate new password button



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

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
![Otp input](https://github.com/hasan-ahani/filament-otp-input/raw/main/docs/otp.png)

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
![Otp input](https://github.com/hasan-ahani/filament-otp-input/raw/main/docs/otp-number.png)

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Hasan Ahani](https://github.com/hasan-ahani)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
