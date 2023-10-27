<?php

// you can store multiple data in a single array with different data types
//index array
$data = ['1',1,1.1,true,false,null];

echo "<pre>";
// print_r($data);
// var_dump($data);
// var_export($data);


// associtive array

$arr = array("name"=>"Ankit","Age"=>28,"City"=>"Ahmedabad");
// print_r($arr);



// multi dimenstional array


$school = array("DPS"=>
["11th standard"=>array("Ankit"=>[
    "Computer"=>89,
    "Drama"=>78,
    "sports"=>99
],
"Vaibhavi"=>array("Computer"=>89,
"Drama"=>78,
"sports"=>99)


)],
"12th Standard"=>array("Fazil"=>[
    "Computer"=>89,
    "Drama"=>78,
    "sports"=>99
],
"Vaibhavi"=>array("Pathik"=>89,
"Drama"=>78,
"sports"=>99)


),


);



print_r($school);














?>