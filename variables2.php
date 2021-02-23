<?php
$var5 = [
    "An array of string",
    'Another element in the array',
    1234,
    12.34,
    true,
    false
];
print_r($var5);
echo gettype($var5) . "\n";

$var5[10] = 'my new string';
$var5[0] = 9876;
print_r($var5);
