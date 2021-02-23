<?php

$shellOutput = `ps -aux`;
var_dump($shellOutput);


$shellCommand = 'ps -aux';
$shellOutput = shell_exec($shellCommand);
var_dump($shellOutput);
