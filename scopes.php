<?php $var  = "My Global variable's text"; ?>

Some text here..

<?php
function myHelloFunction() {
    global $var;
    echo "Inside Variable : $var\n\n";
}

myHelloFunction();

echo "Outside Variable : $var\n\n";
?>
