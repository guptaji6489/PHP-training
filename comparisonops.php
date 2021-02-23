<?php

// Equal Operator
var_dump(1 == 1); // true
var_dump(1 == '1'); // true
var_dump(1 == 1.0); // true
var_dump('1.1' == 1.1); // true
var_dump('1' == true); // true
var_dump('0' == false); // true
var_dump(0 == false); // true


// Identical Operator
var_dump(1      === 1);         // true
var_dump(1      === '1');       // false
var_dump(1      === 1.0);       // false
var_dump('1.1'  === 1.1);       // false
var_dump('1'    === true);      // false
var_dump('0'    === false);     // false
var_dump(0      === false);     // false

// Not Equal Operator
var_dump(1      <> 1);         // false
var_dump(1      != 1);         // false
var_dump(1      != '1');       // false
var_dump(1      != 1.0);       // false
var_dump('1.1'  != 1.1);       // false
var_dump('1'    != true);      // false
var_dump('0'    != false);     // false
var_dump(0      != false);     // false

// Not Identical Operator
var_dump(1      !== 1);         // false
var_dump(1      !== '1');       // true
var_dump(1      !== 1.0);       // true
var_dump('1.1'  !== 1.1);       // true
var_dump('1'    !== true);      // true
var_dump('0'    !== false);     // true
var_dump(0      !== false);     // true

// Comparison 
var_dump(1 <  2);     // true
var_dump(2 >  1);     // true
var_dump(1 <= 1);     // true
var_dump(1 >= 1);     // true

// Spaceship Operator
var_dump(4 <=> 5);     // -1
var_dump(5 <=> 5);     //  0
var_dump(5 <=> 4);     // +1

// Comparing strings
var_dump('hello' != 'world');
var_dump('hello' !== 'world');
var_dump('hello' == "hello");
var_dump('hello' === "hello");



var_dump([]      ==  []);       // true
var_dump([]      === []);       // true
var_dump(['abc'] ==  ['abc']);  // true
var_dump(['abc'] === ['abc']);  // true

var_dump(['abc'] <=> ['abc','efg']);  // -1
var_dump(['abc'] <=> ['abc']);  // 0
var_dump(['abc', 'efg'] <=> ['abc']);  // 1

var_dump(['abc'] <=> ['efg']);  // -1
var_dump(['efg'] <=> ['abc']);  // 1

var_dump(['efg','abc'] <=> ['abc','efg']);  // 1
var_dump(['abc', 'efg'] <=> ['efg', 'abc']);  // -1