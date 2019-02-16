<?php

use \Crawler\Services\CrawlerService;
require_once __DIR__ . '/Autoloader.php';

$crawler = new CrawlerService();
$crawler->getUrlContent('');


