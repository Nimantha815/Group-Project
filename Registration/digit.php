<!DOCTYPE html>

<?php
session_start();
require("ImConnect.php");
if(isset($_POST['submit'])){
if($_SESSION["digit"]==$_POST['digit']){

header("Location:buyer.php");

}
}
?>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="..\..\css\header.css">
  <link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="..\..\css\footer.css">
	<title>4 Digit</title>
</head>


<body>	
  		
  	<div class="post">	
<p class="sign" align="center">4 Digit</p>
<form action="digit.php" method="post" enctype="multipart/form-data" >
<div class="remember" >
<label "remember">Enter 4 Digit</label>  
</div>
 <input class="un " align="center" type="text" placeholder="4 Digit" name="digit"  required>    
 </div>
	 <div >
          <input type="submit" name="submit" class="save"   value="SUBMIT">
          
      </div>
	
</div>

</form>
<br>


  
</body>
</html>



