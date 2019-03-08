<?php

namespace BookStore\DataMapper;

class BookMapper
{
    private $db;
    public function __construct(\BookStore\DataAccess\Database $database) {
        $this->db = $database->getDb();
    }

    public function getById($id): \BookStore\Models\Book {
        $stmt = $this->db->prepare("SELECT * FROM `book` WHERE `id` = :id");
        $stmt->bindValue('id', $id);
        $stmt->execute();
        $row = $stmt->fetch();
        var_dump($row);
        return $this->mapToObject($row);
    }

    private function mapToObject($row): \BookStore\Models\Book {
        return new \BookStore\Models\Book($row);
    }
}
