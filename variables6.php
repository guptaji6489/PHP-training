<?php

function sayHello() {
    echo "hello\n";
}

$funName = "sayHello";
echo gettype($funName);

sayHello();