<?php

interface A 
{
    function t1();
    
}

interface B 
{
    function t2();
}


class xyz implements A,B
{
    function t1()
    {
        echo"this is interface 1<br>";
    }

    function t2()
    {
        echo"this is interface 2<br>";
    }
}

$obj= new xyz;
$obj->t1();
$obj->t2();

?>