<?php

$phpcode = $_GET['code'] ?? '$var1 = "Hello World";

for ($i=0; $i < 5; $i++) { 
    echo "hello $var1\n";
}';

eval($phpcode);

echo $var1, "\n";

