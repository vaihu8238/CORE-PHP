<?php

$marks = 96;

if($marks > 0)
{

    if($marks >= 33 && $marks <50)
    {
        echo "pass";
    }
    elseif ($marks >= 50 && $marks <70) 
    {
        echo "you have B+ grade";
    }
    elseif ($marks >= 70 && $marks <90) 
    {
        echo "you have A+ grade";
    }
    elseif ($marks >= 90 && $marks <100) 
    {
        echo "you have A++ grade";
    }
    else
    {
        echo "fail";
    }
}


?>