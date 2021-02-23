<?php

$var1 = 5;
// $var2 = 5;
$var3 = $var1 + @$var2 + 3;
var_dump($var3);


$array1 = ['abc','efg'];
var_dump(@$array1[2]);


$obj1 = new stdClass;
$obj1->name = 'SKaaS';
var_dump(@$obj1->location);

$return1 = @file('invalid_file.php');
var_dump($return1);