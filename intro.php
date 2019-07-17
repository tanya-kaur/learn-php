<?php

/**
 * PHP provides two constructs to create an array - 
 * 1. []
 * 2. array()
 * 
 * - PHP array can have any type of elements. It doest not have to be homogeneous. 
 */

$nums = [12, 5, "Hi"];

$mixed = array(
    "Hello",
    10
);

$arr = [
    'a' => 'fruits',
    'b' => 'animals',
    'c' => 'humans'
];

$mixed_arr = array(
    "hello",
    'abc' => "hi",
    5 => "hey",
    'xyz' => 10,
    15
);

//print_r($nums);
//print_r($mixed_arr);

// var_dump($mixed);

// for($i=0;$i<count($nums);$i++){
//     echo $nums[$i] . "<br/>";
// }

/**
 * PHP has
 * 1. Indexed array
 * 2. Associative array
 * 3. Mixed
 */

 //keep in mind, array is the most widely used construct in PHP and so very very important. Array is very versatile in PHP

 foreach($mixed_arr as $k => $v){
     echo $k . " : " . $v . "\n";
 }

 foreach($mixed_arr as $value){
    echo $value . " ";
}

print_r(array_keys($mixed_arr));