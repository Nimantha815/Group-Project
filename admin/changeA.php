<?php
session_start();
include("ImConnect.php");
if(isset($_POST['Submit']))
{
 $oldpass=$_POST['opwd'];
 $useremail=$_SESSION['email'];
 $newpassword=$_POST['npwd'];
$sql=mysqli_query($connection,"SELECT password FROM admin where password='$oldpass' && email='$useremail'");

if($sql)
{
 $con=mysqli_query($connection," UPDATE admin set password=' $newpassword' where email='$useremail'");
$_SESSION['msg1']="Password Changed Successfully !!";
}
else
{
$_SESSION['msg1']="Old Password not match !!";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login for Change Password</title>
    <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" href="01.css">
    <!-- Custom CSS -->
    <style>
    body {
        padding-top: 70px;
        /* Required padding for .navbar-fixed-top. Remove if using .navbar-static-top. Change if height of navigation changes. */
    }
    </style>
<script type="text/javascript">
function valid()
{
if(document.chngpwd.opwd.value=="")
{
alert("Old Password Filed is Empty !!");
document.chngpwd.opwd.focus();
return false;
}
else if(document.chngpwd.npwd.value=="")
{
alert("New Password Filed is Empty !!");
document.chngpwd.npwd.focus();
return false;
}
else if(document.chngpwd.cpwd.value=="")
{
alert("Confirm Password Filed is Empty !!");
document.chngpwd.cpwd.focus();
return false;
}
else if(document.chngpwd.npwd.value!= document.chngpwd.cpwd.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.chngpwd.cpwd.focus();
return false;
}
return true;
}
</script>
</head>

<body>

    

    <!-- Page Content -->
   <div class="form_wrapper">
        <div class="form_container">
            <div class="title_container">
                <h2>Password Change</h2>
            </div>
            <div class="row clearfix">
                <div class="">
                   <p style="color:red;"><?php echo $_SESSION['msg1'];?><?php echo $_SESSION['msg1']="";?></p>
             <form name="chngpwd" action="changeA.php" method="post" onSubmit="return valid();">
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="opwd" id="opwd" placeholder="Old Password" required />
                        </div>
                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="npwd" id="npwd" placeholder="New Password" required />
                        </div>

                        <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                            <input type="password" name="cpwd" id="cpwd" placeholder="Re-Type New Password" required />
                        </div>

                    <td><input type="submit" name="Submit" value="Change Passowrd" /></td>                 
                     </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container -->

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
