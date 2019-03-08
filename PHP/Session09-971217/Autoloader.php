<?php
function project_autoloader ($classname) {
    $firstSlash = strpos($classname, '\\') + 1;
    $classname = substr($classname, $firstSlash);
    $directory = str_replace('\\', '/', $classname);
    $filename = __DIR__ . '/' . $directory . '.php';
    if(file_exists($filename)) {
       require_once($filename);
       return true;
    }
    return false;
}
spl_autoload_register('project_autoloader');
require_once __DIR__ . '/vendor/autoload.php';
//PSR-0 | PSR-4
