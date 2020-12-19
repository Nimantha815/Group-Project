
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM producta WHERE p_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: productA.php");

}
else
	echo "Not Deleted";
?>
