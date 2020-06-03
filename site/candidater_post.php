<?php include("../admin/fonctions.php"); 
if (!empty($_POST)){
	// Fonction change permet d'échapper les simples quotes et balises html.
    $email = change($_POST["email"]);
	$id = $_GET['id'];
	$motivation = change($_POST["motivation"]);
	$sql = "INSERT INTO candidatures (postulant_mail, asso_id, motivation) VALUES('$email', '$id', '$motivation')";

	$query = mysqli_query($lien,$sql);
	
	//echo('Erreurs identifiants ou mot de passe!');
}
