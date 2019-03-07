<?php
/*
use \BookStore\Config\Config;

require_once __DIR__ . '/Autoloader.php';

$cfg = Config::getInstance();
var_dump($cfg->get('db'));
*/

require_once __DIR__ . '/MyClass.php';
MyClass::addToCounter();
echo MyClass::$counter;
