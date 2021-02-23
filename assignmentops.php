<?php

$var1 = 1;
echo '$var1 = 1', "\t", $var1, "\n";

$var1 = $var1 + 5;
echo '$var1 = $var1 + 5', "\t", $var1, "\n";

$var1 += 5;
echo'$var1 += 5', "\t",  $var1, "\n";

$var1 -= 5;
echo'$var1 -= 5', "\t",  $var1, "\n";

$var1 *= 5;
echo'$var1 *= 5', "\t",  $var1, "\n";

$var1 /= 5;
echo'$var1 /= 5', "\t",  $var1, "\n";

$var1 %= 5;
echo'$var1 %= 5', "\t",  $var1, "\n";

$var1 **= 2;
echo '$var1 **= 2', "\t", $var1, "\n";

echo "\n\n\n";


$var2 = 'Hello world';
$var2 = $var2 . ', How are you?';
$var2 .= "\n Everything is fine\n";
echo $var2;
echo "\n\n\n\n";



$var3 = null;
$var4 = $var3 ?? 'fallback';
echo $var4, "\n";



// $var3 = $var3 ?? 'fallback';
$var3 = "Hello";
$var3 ??= 'fallback';
echo $var3, "\n";
