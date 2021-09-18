# Contacter

:zap: Lightweight contact form package for laravel

## Installation

```bash
composer require samuelkrupik/contacter
```

## Preparing database
This will create new table in database for storing contacts.
```bash
php artisan migrate
```

## Laravel without auto discovery
If you don't use auto-discovery, add the ContacterServiceProvider to the providers array in config/app.php
```php
SamuelKrupik\Contacter\ContacterServiceProvider::class,
```

## Preparing queue
You should configure queue to run in your laravel application.
For more information about queues click [here](https://laravel.com/docs/8.x/queues)

## Publishing configuration file
```bash
php artisan vendor:publish --tag=config
```

## Configuring views
**Publish views**
```bash
php artisan vendor:publish --tag=config
```
Now you can modify published views
