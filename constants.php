<?php

define('NAME', ['SKaaS'], true);

echo NAME[0] . "\n";

NAME[1] = 'Bangalore';

function accessConstant()
{
    echo "Inside function : ". nAMe[0] . "\n";
}

accessConstant();