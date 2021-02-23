<?php

echo __DIR__. "\n";

echo __FILE__. "\n";

echo __LINE__. "\n";

function helloWorld()
{
    echo "My function name is " . __FUNCTION__ . "\n"; 
}
helloWorld();

// __DIR__
// __FILE__
// __LINE__
// __FUNCTION__
// __CLASS__
// __METHOD__
// __NAMESPACE__

class MyHello {
    function sayHello() {
        __METHOD__
    }
}