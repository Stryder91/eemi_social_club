<?php include("../admin/fonctions.php"); 
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Candidater</title>
	 <!-- Favicons -->
	<link href="../../assets/img/favicon.png" rel="icon">
	<link href="../../assets/img/apple-touch-icon.png" rel="apple-touch-icon">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
	<link href="../assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="../assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
	<link href="../assets/vendor/owl.carousel/../assets/owl.carousel.min.css" rel="stylesheet">
	<link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assets/css/style.css" rel="stylesheet">
</head>
<body>
	<?php include('header.php');?>

	<!-- Connexion -->
	<section>
		<form action="login_post.php" method="POST">
		<div class="container col-lg-6 mt-5 pt-5">
			<h1>Connexion</h1>
			<p>Bon retour parmi nous!</p>
			<hr>
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Entrer Email" name="email" id="email" class="form-control" required>

			<label for="psw" class="pt-5"><b>Mot de passe</b></label>
			<input type="password" placeholder="Entrer Mot de passe" name="psw" id="psw"  class="form-control" required>
			<hr>
			<button type="submit" class="btn btn-info">Connexion</button>
		</div>
		</form>
	</section>
	<?php include('footer.php');?>
</body>
</html>