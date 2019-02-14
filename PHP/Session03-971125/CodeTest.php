<?php

use Crawler\Models\CrawlTask;

//require 'Models/CrawlTask.php';
require_once 'Models/CrawlTask.php';
//include 'Models/CrawlTask.php';
//include_once 'Models/CrawlTask.php';

$task = new CrawlTask();
var_dump($task);

//Magic constants
var_dump(__DIR__);
var_dump(__FILE__);
var_dump(__LINE__);
var_dump(__FUNCTION__);
var_dump(__CLASS__);
var_dump(__NAMESPACE__);

