<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["shopname"]);
header("Location:../../index.php");
?>