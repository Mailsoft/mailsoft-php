<?php

use Mailsoft\MailsoftClient;

include "vendor/autoload.php";

$secret_key = 'YOUR_MAILSOFT_ACCOUNT_SECRET_KEY';

$MailsoftClient = new MailsoftClient();
$MailsoftClient->setSecretKey($secret_key);


//List all people
$response = $MailsoftClient->request('GET', '/people');
print_r($response);

//Create a person
$response = $MailsoftClient->request('POST', '/people', ['email' => 'old@mailsoft.io']);

//Update a person (unsubscribes a person)
$response = $MailsoftClient->request('PUT', '/people/1', ['subscribed' => false]);

//Retrieve a person
$response = $MailsoftClient->request('GET', '/people/1');