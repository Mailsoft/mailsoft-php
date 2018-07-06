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