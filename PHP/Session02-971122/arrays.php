<?php

$empty1 = [];
$empty2 = array();

var_dump($empty1);
var_dump($empty2);

$names1 = ['Harry', 'Ron', 'Hermione'];
$names2 = array('Harry', 'Ron', 'Hermione');
$status1 = [
'name' => 'James Potter',
'status' => 'dead'
];
$status2 = array(
'name' => 'James Potter',
'status' => 'dead'
);

var_dump($names1);
var_dump($status1);

echo '<hr/>';
$names = ['Harry', 'Ron', 'Hermione'];
$status = [
'name' => 'James Potter',
'status' => 'dead'
];
$names[] = 'Neville';
$status['age'] = 32;
//print_r($names, $status);

$names['addedMember'] = 'Neville';
$names[] = 'Ross';
$names[50] = 'Monica';
$names[] = 'Chandler';
$names['newMember'] = 'Neville';
$names[] = 'Sheldon';

unset($names['newMember']);
unset($names[50]);
//unset($names);
var_dump($names);
var_dump($status);


?>
