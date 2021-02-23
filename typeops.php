<?php

class MyClassA {}

class MyClassB {}

$obj1 = new MyClassA;

var_dump($obj1 instanceof MyClassA);
var_dump($obj1 instanceof MyClassB);


class NewClassA {}
class NewClassB extends NewClassA {}

// $obj1 = new NewClassA;
$obj1 = new NewClassB;

var_dump($obj1 instanceof NewClassA);
var_dump($obj1 instanceof NewClassB);