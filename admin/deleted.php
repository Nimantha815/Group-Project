
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM delivery WHERE d_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: delivery.php");

}
else
	echo "Not Deleted";
?>
