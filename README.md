### Laravel bulk sms
_V2 supports V9 and above use V1 for V8 and below_

This package provides  a Facade to send SMS from any controller. Open a free account [Royce BulkSMS](https://roycebulksms.com), under API menu click generate API. Copy the API key and paste it in your .env file

```sh
API_KEY=apikey
SENDER_ID=RoyceLTD
```

## Features


- **Provides a database table for storing sent text. table name:sent_text_messages**

- **Receive Instant delivery status.** Add webhook url to your bulksms account we'll send you message delivery status back to your application




## Installation

Install`royceltd/laravel-bulksms:*` 

```sh
composer require royceltd/laravel-bulksms:*
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

### Support

We offer free integration. React us via call/whatsapp +254 713727937 developer@roycetechnologies.co.ke

### API integration
If you would like to integrate API without using package check docs here: [API documentation](https://developer.roycebulksms.com/)





