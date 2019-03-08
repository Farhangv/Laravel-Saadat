<?php
use \BookStore\Config\Config;

namespace BookStore\DataAccess;

class Database
{
    private $db;
    public function __construct(\BookStore\Config\Config $config)
    {
        $host = $config->get('db')['host'];
        $dbname = $config->get('db')['database'];
        $this->db = new \PDO("mysql:host=$host;dbname=$dbname",
        $config->get('db')['username'],
        $config->get('db')['password']);

        $this->db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    public function getDb(): \PDO
    {
        return $this->db;
    }
}
