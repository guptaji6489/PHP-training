<?php

function updatesCounter() {
    static $counter = 1;
    $var = 10;
    echo "$counter\n";
    echo "$var\n";
    $counter++;
    $var++;
}

updatesCounter();
updatesCounter();
updatesCounter();
updatesCounter();
updatesCounter();

