### Laravel bulk sms

![Bulk sms Dashboard](https://roycebulksms.com/assets/outbox.png)

This package provides  a Facade to send SMS from any controller. Open a free account [Royce BulkSMS](https://roycebulksms.com), under API menu click generate API. Copy the API key and paste it in your .env file

```sh
API_KEY=apikey
SENDER_ID=RoyceLTD
```

## Features


- **Provides a database table for storing sent text. table name:sent_text_messages**

- **Receive Instant delivery status.** Add webhook url to your bulksms account we'll send you message delivery status back to your application




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

T Open a free account [Royce BulkSMS](https://roycebulksms.com), under API menu click generate API. Copy the API key and paste it in your .env file



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


### Screenshots

- Send send sms to multiple phone number. I can be copied from excel

![Send Single SMS](https://roycebulksms.com/assets/sendsinglesms.png)

- Send Group SMS

![Send group SMS](https://roycebulksms.com/assets/sendtogroups.png)

- Send to Multiple Contacts

![Send to Contacts](https://roycebulksms.com/assets/sendtocontacts.png)

- Add contacts and Groups

![Bulk sms Dashboard](https://roycebulksms.com/assets/newcontact.png)

- Register Webhook URL to receive instant delivery notification
