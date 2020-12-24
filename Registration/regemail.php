<?php
session_start();
require("ImConnect.php");
if(isset($_POST['submit'])){

$to_email = $_POST['email'];
$subject = "RESET PASSWORD";
$body = rand(1000,9000);
$headers = "From: helakamsrilanka@gmail.com";

mail($to_email, $subject, $body, $headers);
$_SESSION["digit"] = $body;
header("Location:digit.php");


}
?>

<html>

<head>
  <link rel="stylesheet" href="forgot.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <title>Forgot Password?</title>
</head>

<body>
  <div class="main">
    <p class="sign" align="center">SIGN UP</p>
    <p class="forgot" align="center">Enter the email address  .</p>
    <form class="form1" action="regemail.php" method="post">
      <input class="un " name="email" type="text" align="center" placeholder="Email">
     
       <div >
          <input type="submit" name="submit" class="submit" align="center"  value="Enter">
          
      </div>
      
    
     </form>       
                
    </div>
     
</body>

</html>