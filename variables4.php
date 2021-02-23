<?php
$my1stobj = new stdClass;
$my1stobj->name = "Skaas";
$my1stobj->location = "bangalore";
$my1stobj->country = "India";

print_r($my1stobj);
echo gettype($my1stobj);

$convertedArray = (array) $my1stobj;
print_r($convertedArray);
echo gettype($convertedArray);
