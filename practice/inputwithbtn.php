<!-- <html> 
    <head>
        <title> two number addition :</title>
    </head> 
<body>
    

<form method="post">  

Enter num1:  <input type="number" name="num1" /><br><br>  
Enter num2:  <input type="number" name="num2" /><br><br>  
             <input  type="submit" name="submit" value="Add">  
</form> 

//<?php

    // error_reporting(0); 
    // if(isset($_POST['submit']))  
    // {  
    //     $num1 = $_POST['num1'];  
    //     $num2 = $_POST['num2'];  
    //     $sum =  $num1+$num2;     
    //     echo "The sum of $num1 and $num2 is: ".$sum; 

    // } 

// ?>   
</body>  
</html>   -->

<!-- 
<html>
<head>
    <title>two add with table</title>
</head>
<body>
    <form method="post">
    <table border="1">
        <tr>
            <td>num1:</td>
            <td><input name="num1"/></td>
        </tr>
        <tr>
            <td>num2:</td>
            <td><input name="num2"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Add"/></td>
        </tr>

    </table>
    </form>
    //<?php
    // if (isset($_POST['submit']))
    // {
    //     $num1 = $_POST['num1'];  
    //     $num2 = $_POST['num2'];  
    //     $sum =  $num1+$num2;     
    //     echo "The sum of $num1 and $num2 is: ".$sum;
    // }
    // ?>
</body>
</html> -->



<html>
<head>
    <title>two add with table</title>
</head>
<body>
    <form method="post">
    <table border="1">
        <tr>
            <td>num1:</td>
            <td><input name="num1"/></td>
        </tr>
        <tr>
            <td>num2:</td>
            <td><input name="num2"/></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Add"/></td>
        </tr>

    </table>
    </form>
    <?php

    class vaibhu
    {
        function v(){
        if (isset($_POST['submit']))
            {
                $num1 = $_POST['num1'];  
                $num2 = $_POST['num2'];  
                $sum =  $num1+$num2;     
                echo "The sum of $num1 and $num2 is: ".$sum;
            }
        }
    }

    class ch extends vaibhu
    {

    }

    $obj = new ch;
    $obj->v();
?>
</body>
</html>