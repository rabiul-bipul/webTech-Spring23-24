<?php

$n = 19;
$n2 = 67;
$n3 = 40;

if($n > $n2 && $n > $n3){
    echo "Large number is :". $n;
}
if($n2 > $n && $n2 > $n3){
    echo "Large number is :". $n2;
}
else{
    echo "Large number is :". $n3;
}

?>