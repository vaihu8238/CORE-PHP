<?php


function largest($x, $y, $z) {
    $max = $x;
    $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
    
    echo "Largest number among $x, $y and $z is : $max\n";
  }

  largest(11,22,33);


?>