<?php

 //ini_set('session.gc_maxlifetime', 30*24*60*60);

session_start();

require_once ('php/CreateDb.php');
require_once ('php/component.php');


// create instance of Createdb class
$database = new CreateDb("newdb", "product");

if (isset($_POST['add'])){
    /// print_r($_POST['product_id']);
    if(isset($_SESSION['cart'])){

        $item_array_id = array_column($_SESSION['cart'], "product_id");

        if(in_array($_POST['product_id'], $item_array_id)){
            echo "<script>alert('Product is already added in the cart..!')</script>";
            echo "<script>window.location = 'index.php'</script>";
        }else{

            $count = count($_SESSION['cart']);
            $item_array = array(
                'product_id' => $_POST['product_id']
            );

            $_SESSION['cart'][$count] = $item_array;
        }

    }else{

        $item_array = array(
                'product_id' => $_POST['product_id']
        );

        // Create new session variable
        $_SESSION['cart'][0] = $item_array;
        print_r($_SESSION['cart']);
    }
}
if (isset($_POST['view'])){
    
  $product_id  = $_SESSION['product_id'] ;

}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Home</title>

    
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="css/header.css">

     
      <link rel="stylesheet" href="css/indexs.css">
      <link rel="stylesheet" href="css/footer.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<style type="text/css">
    .img-fluid card-img-top{
        
    }
</style>
<body>

<?php include ("php/header1.php"); ?>
<?php include("includes/ternding.php"); ?>
    
    <?php include("includes/slie.php"); ?>
    <script src="js/scroll.js"></script>




<div class="product">
    
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    button1($row['p_name'], $row['p_price'], $row['p_path1'],$row['p_des'], $row['p_id']);
                }
            ?>
       
</div>
<?php include("includes/service.php"); ?>
<?php include ("php/footer.php"); ?>
</body>
</html>
