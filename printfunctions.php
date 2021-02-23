<?php

$myIndexedArray = [
    "String",
    12.1,
    12,
    true,
    null,
    [12312,1231,1231,12],
    ["key1"=> "value1", "key2"=> "value2"]
];

$myAssociativeArray = [
    "index" => $myIndexedArray,
    "time" => "15:54"
];

$exported = var_export($myAssociativeArray, true);

echo $exported;

