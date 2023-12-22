<?php


// function largest($x, $y, $z) {
//     $max = $x;
//     $max = ($x > $y)? (($x > $z)? $x : $z) : (($y > $z)? $y : $z);
    
//     echo "Largest number among $x, $y and $z is : $max\n";
//   }

//   largest(11,22,33);

//     $x =1011;
//     $y =2222;
//     $z = 8888;
//     $v =9999;

//     $larg = ($x > $y && $x > $z && $x > $v) ? $x : (($y > $z && $y > $v) ? $y : ($z > $v ? $z : $v));

//     echo"largest num is : $larg\n";
  


  class xyz
  {

   function big()
   {

    $a=11;
    $b=22;
    $c=33;
    
    $l =($a > $b && $a > $c)? $a : (($b >$c) ? $b : $c);

    echo"largest number is : $l<br>";

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

        }
}

      $obj = new xyz;
      $obj ->big();

?>