<?php
require_once 'vendor/autoload.php';

use GuzzleHttp\Client;

$fp = fopen('images/blog.png', 'wb');

$client = new \GuzzleHttp\Client();
$request = $client->get('https://artisansweb.net/wp-content/uploads/2020/03/blog-480x360.jpg', ['sink' => $fp]);

fclose($fp);