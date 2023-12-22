<?php

class simplefunvaroutside
{
    public $n = 0;
    public $n1 = 1 ;
    public $n2 = 0 ;
    
    function GetVar()
    {
        for ($i=1;$i<=10;$i++)
        {
            echo $this->n."<br>";
           $this->n = $this->n1 + $this->n2 ;
           $this->n1 = $this->n2 ;
           $this->n2 = $this->n ;
        }
    }

}
// $obj= simplefunvaroutside;
// $obj->GetVar();

class ch1 extends simplefunvaroutside
{

}

$obj =new ch1;
$obj->GetVar();

?>