<?php

// class lar
// {
//     function larg()
//     {
//         $a=11;
//         $b=22;
//         $c=33;


//         $long=($a > $b && $a > $c)? $a : (($b > $c)? $b : $c);

//         echo "the largest number is : $long <br>";
//     }
// }
// $obj = new lar;
// $obj->larg();



// class simplefunwithreturne
// {
//     function lar()
//     {
//                     $a=11;
//                     $b=22;
//                     $c=33;
            
            
//                     $long=($a > $b && $a > $c)? $a : (($b > $c)? $b : $c);
            
//                     return $long;
//     }
// }

// $obj1 = new simplefunwithreturne;
// echo $obj1->lar()."<br>";


// class constfun
// {
//     function __construct()
//     {
//         $a= 111;
//         $b= 222; 
//         $c=333;

//         $long=($a > $b && $a > $c)? $a : (($b > $c)? $b : $c)."<br>";
//         echo $long;
//     }
// }
// $obj2 = new constfun ;


class simplefunvaroutside
{
    public $a=111;
    public $b=222;
    public $c=333;
    
    function GetVar()
    {
        $long=($this->a > $this->b && $this->a > $this->c)? $this->a : (($this->b > $this->c)? $this->b : $this->c);
        echo $long;
    }

}
// $obj3 = new simplefunvaroutside;
// $obj3->GetVar();

class ch1 extends simplefunvaroutside
{

}

$obj = new ch1;
$obj->GetVar();


















?>