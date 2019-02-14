<?php
    //PHP7
    //Spaceship Operator
    var_dump(10 <=> 20);
    var_dump(10 <=> 10);
    var_dump(20 <=> 10);

    var_dump('apple' <=> 'car');
    var_dump('نان' <=> 'باران');
    echo '<hr/>';

    //Strings 
    $text = '           How can a clam cram in a clean cream can? ';
    echo strlen($text); // 45
    echo '<br/>';
    echo '<pre>';
    echo $text;
    echo '</pre>';
    $text = trim($text);
    echo '<br/>';
    echo '<pre>';
    echo $text;
    echo '</pre>';    echo '<br/>';
    echo strtoupper($text); // HOW CAN A CLAM CRAM IN A CLEAN CREAM CAN?
    echo strtolower($text); // how can a clam cram in a clean cream can?
    $text = str_replace('can', 'could', $text);
    echo $text; // How could a clam cram in a clean cream could?
    echo '<br/>';

    echo substr($text, 2, 6); // w coul
    echo '<br/>';

    var_dump(strpos($text, 'can')); // false
    var_dump(strpos($text, 'could')); // 4

    //Escape - Variable

    echo '<hr/>';

    $name = 'John';
    $family = 'Doe';


    $message = "Hello '$name' \"$family\", \nHow\tare you?";
    $tag = "<h1 class=''>Hello</h1>";
    var_dump($message);
    echo $message;
?>
