<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="..\css\header.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" type="text/css" href="..\css\footer.css">
  <title>Add Post</title>
</head>


<body>  
      <?php include('../php/header1.php'); ?> 
    <div class="post">  
<p class="sila" align="center">Add Your Post</p>
<form action="index.php" method="post" enctype="multipart/form-data" >
<div class="mathaka" >
<label "remember">Post Description</label>         
</div>
  <textarea type="text" name="post" class="un" placeholder="Enter Post Description" required></textarea>
  <div class="mathaka" >
  <label class="mathaka" >Upload Image </label>
  </div>
  
  <input class="un" type="file" name="image" required>  <br>
<br>
  <input  type="submit" name="save" class="save" value="ADD">
  
</div>
</form>
<br>
<?php session_start(); ?>
<?php include_once('ImConnect.php');?> 
<?php include('post.php');?>
<?php include('../php/footer.php');?> 

<script src="main.js"></script>

  
</body>
</html>



