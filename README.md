### Laravel bulk sms

This package provides an easy inteface for sending SMS in your laravel application. Open a free account [Royce BulkSMS](http://bulksms.roycetechnologies.co.ke), under API menu click generate API. Copy the API key and paste it in your .env file

```sh
API_KEY=apikey
SENDER_ID=RoyceLTD
```

## Features

- Provide an easy interface for sending bulk sms
- Provides a database table for storing sent text.
- An interface for viewing sent text (once you install the package and ran migration visit _**/textmessages**_ url to view sent texts)
- Provide a callback URL you add to your bulksms account. This will ensure that you receive delivery status back to your application (_coming soon_)

## Installation

Require the `royceltd/laravel-bulksms` package in your `composer.json` and update your dependencies:

```sh
composer require royceltd/laravel-bulksms
```

### Integration

Add the service provider to your `config/app.php` file:

```php

    'providers'     => array(

        //...
         RoyceLtd\LaravelBulkSMS\LaravelBulkSMSServiceProvider::class,

    ),

```

Add the facade to your `config/app.php` file:

```php

    'aliases'       => array(

        //...
       'RoyceBulkSMS' => \RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS::class

    ),

```

```sh
php artisan vendor:publish --tag="roycebulksms"
```

### Run migration

This package shift with a database table that will store sent text. It also provides a simple UI you
can view the sent text

```sh
php artisan migrate
```

## Usage

### Laravel usage

This package provides an easy inteface for sending SMS in your laravel application. Open a free account [Royce BulkSMS](http://bulksms.roycetechnologies.co.ke), under API menu click generate API. Copy the API key and paste it in your .env file

```sh
API_KEY=apikey
SENDER_ID=RoyceLTD
```

### Sending Text message

In order to send text message add facade at the top of your controller and invoke sendSMS method with
two parameters **Recipient phone number** and **Message** in that order.

Check sample below for guidance.

```php

   use RoyceLtd\LaravelBulkSMS\Facades\RoyceBulkSMS;

        $phone = "071234567";
        $message = "Hello world";

        RoyceBulkSMS::sendSMS($phone, $message);

```

### Viewing sent text

After running migration, visit **/textmessages**
