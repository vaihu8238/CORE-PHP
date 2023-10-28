<?php

$cars = ["bmw"=>"x5","audi"=>"a8","ferrari"=>"spider 255","mercedeas"=>"s-class","porsche"=>"caynn","range rover"=>"evok"];

echo "<pre>";
print_r($cars);


print_r(array_chunk($cars,2));



print_r(array_slice($cars,2));


?>
