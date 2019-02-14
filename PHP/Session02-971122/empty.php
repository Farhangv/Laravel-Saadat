<?php

    //$a = null;
    //gettype($a);
    //var_dump($a);


    $string = null;
    $array = [];
    $names = ['Harry', 'Ron', 'Hermione'];
    var_dump(empty($string)); // true
    var_dump(empty($array)); // true
    var_dump(empty($names)); // false
    var_dump(isset($names[2])); // true
    var_dump(isset($names[3])); // false
    var_dump(isset($a)); //false
    var_dump(isset($string));


    var_dump(in_array('Chandler', $names));
    var_dump(in_array('Ron', $names));

    var_dump(array_search('Ron', $names));
    var_dump(array_search('Chandler', $names));

    $properties = [
        'firstname' => 'Tom',
        'surname' => 'Riddle',
        'house' => 'Slytherin'
    ];
    //sort($properties);
    //var_dump($properties);
    asort($properties);
    var_dump($properties);
?>
