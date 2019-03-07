<?php
use \BookStore\Config\Config;

namespace BookStore\DataAccess;

class Database
{
    private $db;
    public function __construct(Config $config)
    {
        $this->db = new PDO("mysql:host=$config->get('db')['host'];dbname=$config->get('db')['database']",
        $config->get('db')['username'],
        $config->get('db')['password']);

        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }

    public function getDb()
    {
        return $this->db;
    }
}
