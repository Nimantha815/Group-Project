
<?php require_once("ImConnect.php") ?>
 <?php session_start(); ?>
<?php 
$sql = "DELETE FROM post WHERE post_id = '$_GET[id]'  ";

$result = mysqli_query($connection,$sql);
if($result){
header("Location: posttable.php");

}
else
	echo "Not Deleted";
?>
