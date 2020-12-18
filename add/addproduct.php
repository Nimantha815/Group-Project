
<!DOCTYPE html> 



<html>

  <link rel="stylesheet" href="add.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Add Product</title>


<body>

<div id="content" >
  <form action="addproduct.php" method="post" enctype="multipart/form-data" >
    

    <div class="main">
      <p class="sila" align="center">Add Your Product</p>
      <form class="form1" enctype="multipart/form-data">
      <div class="form-group">
            
            <div class="mathaka" align="center">
             <label for="Pname"><b>Product Name</b></label>
           </div>
    <input class="un " align="center" type="text" placeholder="Enter Name" name="Pname"  required>

  </div>
  <div class="form-group">
    <div class="mathaka" align="center">
    <label for="Pcategory"><b>Product Category</b></label>
  </div>

     <input class="un " align="center" type="text" placeholder="Enter Catergory" name="Pcat" id="Pcat" required>
</div>
<div class="form-group">
  <div class="mathaka" align="center">
    <label for="Pcolor"><b>Product Color</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Color" name="Pcolor" id="Pcolor" required>
</div>
<div>
<div class="mathaka" align="center">
    <label for="Pquantity"><b>Quantity</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product quantity" name="Pquantity" id="Pquantity" required>
</div>
<div class="form-group">
<div class="mathaka" align="center">
    <label for="Pprice"><b>Product Price</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Price" name="Pprice" id="Pprice" required>
</div>
<div class="form-group">
  <div class="mathaka" align="center">
    <label for="Pweight"><b>Product Weight</b></label>
  </div>
    <input  class="un " align="center" type="text" placeholder="Enter Product Weight" name="Pweight" id="Pweight" required>
</div>
<div class="form-group">
  <div class="mathaka" align="center">
    <label for="Pdes"><b>Product Description</b></label>
  </div>
    <input class="un " align="center" type="text" placeholder="Enter Product Descripion" name="Pdes" id="Pdes" required>

  </div>

   <div class="form-group"> 
    <div class="mathaka" align="center">
    <label for="productImage" style="cursor: pointer;"><b>Upload Image1</b></label>
  </div>
    <img id="output" width="200" /> 
    <input class="un" align="center" type="file" name="image"  style="" required>
    <br>
    
          <br>
    <input type="submit" name="Submit" class="submit" align="center"  value="ADD">
          
      </div>
      
    
    

    </div>
  </form>
  </form>
  <?php session_start(); ?>


<?php include_once('ImConnect.php');?>
<?php include_once('productadd.php');?>






</div>
</body>
</html>

