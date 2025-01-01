# Elicense - Laravel License Management Package

A Laravel package for managing electronic licenses and license keys.

## Installation

You can install the package via composer:

```bash
composer require flevnex/elicense
```

## Usage

```php
// Generate a new license
use Flevnex\Elicense\Models\License;

$license = License::create([
    'user_id' => 1,
    'expires_at' => now()->addYear()
]);
```

### Configuration

Publish the configuration file:

```bash
php artisan vendor:publish --provider="Flevnex\Elicense\ElicenseServiceProvider"
```

### Database Migrations

Run the migrations:

```bash
php artisan migrate
```

## Testing

```bash
composer test
```

## Security

If you discover any security related issues, please email your.email@example.com instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.