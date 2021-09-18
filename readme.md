# Contacter

###### Lightweight contact form package for laravel

## Installation

```bash
composer require samuelkrupik/contacter
```

## Preparing database
This will create new table in database for storing contacts.
```bash
php artisan migrate
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
