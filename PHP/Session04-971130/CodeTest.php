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
$dbConfig = Config::getInstance()->get('db');
$db = new PDO(
    'mysql:host=127.0.0.1;dbname=bookstore',
    $dbConfig['user'],
    $dbConfig['password']
);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = <<<SQL
SELECT * FROM `Book`
SQL;

var_dump($query);


