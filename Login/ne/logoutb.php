<?php
session_start();
unset($_SESSION["d_id"]);
unset($_SESSION["username"]);
header("Location:../../index.php");
?>