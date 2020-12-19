
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM seller WHERE c_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: sellers.php");

}
else
	echo "Not Deleted";
?>
