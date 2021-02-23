<?php


$var1 = "Hello";
$var2 = "World";

$var3 = $var1 . $var2;
$var3 .= "\n\n";

// var_dump($var3);

$array1 = ["Good morning"];

$obj1 = new stdClass;
$obj1->name = "skaas";

$var4 = "The value of variable 3 is: $var3. The ending of var4.\n\n {$array1[0]}.\n\n{$obj1->name}";
var_dump($var4);