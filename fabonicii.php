<h1> fibonacii series </h1>

<?php

$n = 0;
$n1 = 1 ;
$n2 = 0 ;


for ($i=1;$i<=10;$i++)
{
    echo $n."<br>";
    $n = $n1 + $n2 ;
    $n1 = $n2 ;
    $n2 = $n ;
}
?>