<?php include("../admin/fonctions.php"); ?>
<?php
if (!empty($_POST)){
	// Fonction change permet d'échapper les simples quotes et balises html.
    $email = change($_POST["email"]);
    $psw = change($_POST["psw"]);
	
    $sql = "select * from users where email_user='$email'";
	$query = mysqli_query($lien,$sql);
	while ($result = mysqli_fetch_assoc($query)){
		if (isset($result['email_user'])){
			if (md5($psw) === $result['psw_user']) {
				$_SESSION['email'] = $result['email_user'];
				header("location:../index.php");
			}
		}
	}
	echo('Erreurs identifiants ou mot de passe!');
}

?>