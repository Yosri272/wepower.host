# Upgrade Guide

<<<<<<< HEAD
## Upgrading To 3.0 From 2.x

### Minimum Versions

The following dependency versions have been updated:

- The minimum PHP version is now v8.0.2
- The minimum Laravel version is now v9.21

### New `expires_at` Column

Sanctum now supports expiring tokens. To support this feature, a new `expires_at` column must be added to your application's `personal_access_tokens` table. To add the column to your table, create a migration with the following schema change:

```php
Schema::table('personal_access_tokens', function (Blueprint $table) {
    $table->timestamp('expires_at')->nullable()->after('last_used_at');
});
=======
## Upgrading To 4.0 From 3.x

### Minimum PHP Version

PHP 8.2 is now the minimum required version.

### Minimum Laravel Version

Laravel 11.0 is now the minimum required version.

### Migration Changes

Sanctum 4.0 no longer automatically loads migrations from its own migrations directory. Instead, you should run the following command to publish Sanctum's migrations to your application:

```bash
php artisan vendor:publish --tag=sanctum-migrations
```

### Configuration Changes

In your application's `config/sanctum.php` configuration file, you should update the references to the `authenticate_session`, `encrypt_cookies`, and `validate_csrf_token` middleware to the following:

```php
'middleware' => [
    'authenticate_session' => Laravel\Sanctum\Http\Middleware\AuthenticateSession::class,
    'encrypt_cookies' => Illuminate\Cookie\Middleware\EncryptCookies::class,
    'validate_csrf_token' => Illuminate\Foundation\Http\Middleware\ValidateCsrfToken::class,
],
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
```
