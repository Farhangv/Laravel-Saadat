<?php
namespace BookStore\Config;

class Config {
    private $data;
    private static $instance;

    private function __construct()
    {
        $json = file_get_contents(__DIR__ . '/config.json');
        $this->data = json_decode($json, true);
    }

    public static function getInstance() {
        if(self::$instance == null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function get($key)
    {
        if(!isset($this->data[$key])){
            throw new Exception("$key Key is not defined");
        }     
        return $this->data[$key];
    }
}
