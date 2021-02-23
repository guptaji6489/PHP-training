<?php

/*
function hello($name = 'World', ...$args)
{
    // $local =  "Hello $$args\n";
    // echo $local;
    // return $local;
    var_dump($args);
}

// $rv1 = hello();
// $rv2 = hello('All');

hello('India', 'how are you', 'good evening');

*/


// function add(...$numbers) {
//     $sum = 0;
//     foreach ($numbers as $number) {
//         $sum += $number;
//     }
//     return $sum;
// }

// $array = [1,2,3,4,5];

// echo add(...$array);


// function transform(&$array) {
//     array_push($array, 'abc');
//     array_push($array, 'efg');
//     array_push($array, 'hij');
// }

// $myarr = [1,2,3,4,5];

// transform($myarr);

// var_dump($myarr);

function hello($param1, $param2)
{
    var_dump($param1);
    var_dump($param2);
}

hello();