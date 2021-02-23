<?php

$var = 12.3;
echo $var, "\t", gettype($var), "\n";

$var2 = (int) $var;
echo $var2, "\t", gettype($var2), "\n";

$var3 = (string) $var;
echo $var3, "\t", gettype($var3), "\n";

$var4 = (bool) $var;
echo $var4, "\t", gettype($var4), "\n";

$var5 = (float) $var;
echo $var5, "\t", gettype($var5), "\n";
