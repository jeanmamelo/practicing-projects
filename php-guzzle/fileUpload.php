<?php
require_once "vendor/autoload.php";

use GuzzleHttp\Client;

try {
    $client = new Client([
        // base URI is used with relative requests
        'base_uri' => 'https://api.resmush.it',
    ]);

    $response = $client->request('POST', "?qlty=92", [
        'multipart' => [
            [
                'name'      => 'files', // name value requires by endpoint
                'contents'  => fopen(getcwd().'/images/flor.jpg', 'r'),
                'filename'  => 'blog.jpg',
                'headers'   => array('Content-Type' => mime_content_type(getcwd().'/images/flor.jpg'))
            ]
        ]
    ]);

    if(200 == $response->getStatusCode()) {
        $response = $response->getBody();
        $arr_result = json_decode($response);
        echo '<pre>';
        print_r($arr_result);
        echo '</pre>';
    }
} catch(\Exception $e) {
    echo $e->getMessage();
}