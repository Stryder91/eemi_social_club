<?php include("../admin/fonctions.php"); ?>
<?php
	// Fonction change permet d'échapper les simples quotes et balises html.
    echo $email = change($_POST["email"]);
    echo $psw = change($_POST["psw"]);
	$psw = md5($psw);
    $sql = "INSERT INTO users (email_user, psw_user) VALUES('$email', '$psw')";
	$query = mysqli_query($lien,$sql);

    // header("location:./register.php");

?>