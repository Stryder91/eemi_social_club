<?php 
include("../admin/fonctions.php");
echo $_SESSION['email'];
session_destroy();
echo $_SESSION['email'];
header("location:../index.php");
?>