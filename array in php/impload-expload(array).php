<pre>
    <?php
    
    
    $cars = ["bmw"=>"x5","audi"=>"a8","ferrari"=>"spider 255","mercedeas"=>"s-class","porsche"=>"caynn","range rover"=>"evok"];


   print_r($cars);
   $imp= implode('  ,',$cars);
    
   print_r($imp);
//    echo "<br>".$imp;
    
  echo"<br>";  
    
$exp = explode(',',$imp);

print_r($exp);
    
?>
</pre>
