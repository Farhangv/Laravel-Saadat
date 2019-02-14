<?php

//Option 1
//require_once __DIR__ . '/Services/FormService.php';

//Option 2
//PHP7.2 > Deprecated
/*
function __autoload($classname) {
    //var_dump($classname);
    //home/vagrant/code/Models/CrawlTask
    $firstSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $firstSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    //var_dump($filename);
    require_once($filename);
}
*/
//Option 3
/*
function crawler_autoloader($classname) {
    //var_dump($classname);
    $firstSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $firstSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    //var_dump($filename);
    require_once($filename);
}
*/
//spl_autoload_register('crawler_autoloader');

spl_autoload_register(function ($classname) {
    $firstSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $firstSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    require_once($filename);
});
