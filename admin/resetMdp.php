<?php

include("../admin/fonctions.php");

if (!empty($_POST))
{
  $pseudo_reset = $_POST["pseudo_reset"];
  $mdp_reset = md5($_POST["mdp_reset"]);

  $sql = "select * from admin";
  $query = mysqli_query($lien,$sql);
  $result = mysqli_fetch_assoc($query);
  
    if (($pseudo_reset == $result["pseudo"])){
        $sqlReset = "update admin set 
        password='$mdp_reset' 
        where _id = '1'";
        $queryReset = mysqli_query($lien,$sqlReset);
        header("location:../admin/login.php");
    } else {
        echo("Mauvais pseudo! Revenir en arrière et ré-essaier");
    }
}