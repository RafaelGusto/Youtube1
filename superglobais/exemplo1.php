<?php

//GLOBAL
$a = 10;
$b = 20;

function soma(){
    global $a, $b, $c;
    $c = $a + $b;

    // $GLOBALS['c'] = $GLOBALS['a'] + $GLOBALS['b'];
}

soma();
echo $c;

?>