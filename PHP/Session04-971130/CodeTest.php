<?php

use \Crawler\Services\CrawlerService;
require_once __DIR__ . '/Autoloader.php';

$client = new \GuzzleHttp\Client([
    // Base URI is used with relative requests
    'base_uri' => 'http://httpbin.org',
    // You can set any number of default request options.
    'timeout'  => 2.0
]);

var_dump($client);


