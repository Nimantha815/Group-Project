
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM buyer WHERE b_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: buyers.php");

}
else
	echo "Not Deleted";
?>
