<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    // base URI is used with relative requests
    'base_uri' => 'https://reqres.in/',
    'verify' => false
]);

$response = $client->request('POST', '/api/users', [
    'json' => [
        'name' => 'Sam',
        'job' => 'Developer',
    ]
]);

// get status code using $response->getStatusCode();

$body = $response->getBody();
$arr_body = json_decode($body);
echo '<pre>';
print_r($arr_body);
echo '</pre>';