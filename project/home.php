
<?php require_once('header.php'); ?>

<?php
echo "<pre>";
print_r($_REQUEST);
$_SESSION['product'][] = array("price"=>$_REQUEST['price']);
print_r($_SESSION['product']);
// print_r($_SESSION);
// echo $_SESSION['user_info']['name'];
echo "</pre>";

?>
<!-- <?php echo "<h1> Welcome $_COOKIE[username] to our website </h1>"; ?> -->
<!-- <?php echo "<h1> Welcome ". $_SESSION['user_info']['name'] . " to our website </h1>"; ?> -->

<center>

  <?php foreach ($_SESSION['product'] as $key => $value) 
                {
                  // print_r($value); 
                  ?>
                  <form action="" method="post">

                    <div class="card" style="width: 18rem;">
                      <img src="<?php echo $value['image']; ?>" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo $value['price'] ?></h5>
                        <input type="hidden" name="price" value="<?php echo $value['price'] ?>">
                        <button class="btn btn-primary">Add To Cart</button>
                      </div>
                    </div>
                  </form>
<?php } ?>
</center>

<?php require_once('footer.php'); ?>
