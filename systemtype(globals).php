<?php


//it gives information about our local environment and PC

echo "<pre>";
$_ENV = getenv();

// echo $_ENV; give arror of array to srting conversion

print_r($_ENV);
echo $_ENV['USERNAME'];


print_r($_SERVER);




?>