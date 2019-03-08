<?php 

namespace BookStore\Models;

class Book
{
    protected $members = array();
    public function __construct($book_array = [])
    {
        var_dump($book_array);
        if(count($book_array) > 0) {
            $this->members = $book_array;
        }        
    }
    public function __get($arg) {
        if (array_key_exists($arg, $this->members)) {
            return ($this->members[$arg]);
        } 
        else { 
            return ("No such Member!\n"); 
        }
    }
    public function __set($key, $val) {
        $this->members[$key] = $val;
    }

    public function getAllMembers()
    {
        return $this->members;        
    }

    /*
    public static function getById($id): \BookStore\Models\Book
    {

    }
    public function insert(): number
    {
        
    }
    */
}
