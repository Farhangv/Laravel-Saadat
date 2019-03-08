<?php


class MyClass
{
    public static $counter = null;
    
    public static function addToCounter()
    {
        self::$counter++;
    }
}
