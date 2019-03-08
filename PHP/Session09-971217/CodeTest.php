<?php
use \BookStore\Config\Config;
use \BookStore\DataAccess\Database;
require_once __DIR__ . '/Autoloader.php';

/*
use \BookStore\Config\Config;

require_once __DIR__ . '/Autoloader.php';

$cfg = Config::getInstance();
var_dump($cfg->get('db'));
*/
/*
require_once __DIR__ . '/MyClass.php';
MyClass::addToCounter();
echo MyClass::$counter;
*/

$db = (new Database(Config::getInstance()))->getDb();
/*
$rows = $db->query('SELECT * FROM book;');
foreach ($rows as $row) {
    var_dump($row);
}
*/
// heredoc ==> "
// nowdoc ==> '
$title = 'Clean Code';
$isbn = '85-6975-78348';
$year = 2019;
$created = date('Y-m-d H:i:s');
$modified = date('Y-m-d H:i:s');

$query = <<<'SQL'
INSERT INTO book(title,ISBN,publish_year,creation_date,modified_date)
VALUES (:title, :isbn, :year, :created, :modified);
SQL;

$stmt = $db->prepare($query);
/*
$stmt->bindValue('title', $title);
$stmt->bindValue('isbn', $isbn);
$stmt->bindValue('year', $year);
$stmt->bindValue('created', $created);
$stmt->bindValue('modified', $modified);
*/
$params = [
    'title' => 'Design Patterns',
    'isbn' => '85-6975-70348',
    'year' => 2020,
    'created' => date('Y-m-d H:i:s'),
    'modified' => date('Y-m-d H:i:s')
];
//var_dump($_POST);
$result = $stmt->execute($params);

//$result = $db->exec($query);
//$error = $db->errorInfo();
//var_dump($error);
var_dump($result);
var_dump($db->lastInsertId());
