<?php require_once('header.php'); ?>
<pre>

    <?php 
if(isset($_REQUEST['save']))
{

    print_r($_REQUEST);
    print_r($_FILES);


    
    if($_FILES['product_photo']['error'] == 0)
    {
        $from = $_FILES['product_photo']['tmp_name'];
        // $to = "image/".time().$_FILES['product_photo']['name'];
        $to = "image/".uniqid().time().$_FILES['product_photo']['name'];
        
        move_uploaded_file($from,$to);

        $_SESSION['product'][]= array("price"=>$_REQUEST['price'],"image"=>$to);
        print_r($_SESSION);
    }
    else
    {
        echo "Something Went Wrong";
    }
}

?>
</pre>


<div class="px-5 col-sm-6">

    <form action="" method="post" enctype="multipart/form-data">
        
        
        <input class="form-control mb-3" placeholder="Enter Price" type="text" name="price">
        <input type="file" accept="image/*"  name="product_photo" class="form-control mb-3">
        
        <button class="form-control btn btn-primary" name="save" >Submit</button>
        
    </form>
</div>
    

