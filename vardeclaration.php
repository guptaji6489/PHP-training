<?php

// $var = '';

if (empty($var)) {
    echo 'var is empty';
} else {
    echo 'var is not empty';
}
echo "\n";

if (isset($var)) {
    echo 'var is set';
} else {
    echo 'var is not set';
}
echo "\n";

empty -> checks if variable is there and it is not empty

'';
0;
0.0;
false;
[];

unset -> destroys a given variable

$str = 'asdfads';
unset($str);

isset -> if variable is defined and value is not null;

$str  = '';
isset($str) => true
empty($str) => true

delete($var1);

