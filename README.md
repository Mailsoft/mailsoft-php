# Mailsoft PHP SDK

You can sign up for a Mailsoft account at https://mailsoft.io.

## Requirements

PHP 5.4.0 and later.

## Composer

You can install this package via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require mailsoft/mailsoft-php
```

To use the bindings, use Composer's [autoload](https://getcomposer.org/doc/01-basic-usage.md#autoloading):

```php
require_once('vendor/autoload.php');
```

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/mailsoft/mailsoft-php/releases).

## Dependencies

The bindings require the following extensions in order to work properly:

- [`guzzle`]
- [`json`](https://secure.php.net/manual/en/book.json.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

## Getting Started

Simple usage looks like:

```php

<?php

use Mailsoft\MailsoftClient;

include "vendor/autoload.php";

$secret_key = 'sk_ptGhytbDF6sJosMiFFpeIvEQjFNH9uFL';

$MailsoftClient = new MailsoftClient();
$MailsoftClient->setSecretKey($secret_key);


//List all people
$response = $MailsoftClient->request('GET', '/people');
print_r($response);

//Create a person
$response = $MailsoftClient->request('POST', '/people', ['email' => 'old@mailsoft.io']);

//Update a person
$response = $MailsoftClient->request('PUT', '/people/1', ['email' => 'new@mailsoft.io']);

//Retrieve a person
$response = $MailsoftClient->request('GET', '/people/1');
```

## Documentation

Please see https://docs.mailsoft.io for up-to-date documentation.