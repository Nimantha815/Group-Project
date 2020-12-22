<?php

session_start();

require_once ('php/CreateDb.php');
require_once ('./php/component.php');


// create instance of Createdb class
$database = new CreateDb("newdb", "post");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <element event="some JavaScript"></element>
    <title>Timeline</title>
    <link type="text/css" rel="stylesheet" href="praveen.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="..\css\header.css">
    <link rel="stylesheet" type="text/css" href="indexs.css">
    
    <link rel="stylesheet" type="text/css" href="..\css\footer.css">
</head>

<body>

 <?php require_once ('../php/header1.php');?>
        
   <br>
<div class="contair">
        <div class="row text-center py-5">
            <?php
                $result = $database->getData();
                while ($row = mysqli_fetch_assoc($result)){
                    component($row['post_id'], $row['description'], $row['imageName']);
                }
            ?>
        </div>
</div>


</b>
	<!-- <script type="scroll.js"></script> -->
    
    <script src="../js/scroll.js"></script>
    <?php include ("../php/footer.php"); ?>
      <script src="jspost.js">
    </script>
</body>

</html>