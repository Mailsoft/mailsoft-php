<?php

namespace Mailsoft;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class MailsoftClient
{

    const API_URL = "https://mailsoft.io/api";

    protected $client;
    protected $secret_key;

    public function __construct()
    {
        $this->client = new Client();
    }

    public function setSecretKey($secret_key)
    {
        $this->secret_key = $secret_key;
    }

    public function request($method, $uri, $post = [])
    {

        $url = self::API_URL . $uri;
        $options = [
            'auth' => [
                $this->secret_key,
                null
            ],
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'json' => $post
        ];


        try {
            $response = $this->client->request($method, $url, $options);
        } catch (RequestException $e) {
            throw $e;
        }

        $contents = $response->getBody()->getContents();
        return json_decode($contents);
    }
}