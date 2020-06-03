<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Inscription</title>
	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<!-- Inscription -->
	<section>
		<form action="register_post.php" method="POST">
		<div class="container">
			<h1>Inscription</h1>
			<p>Rejoignez nous!</p>
			<hr>
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Entrer Email" name="email" id="email" className="form-control" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Entrer Password" name="psw" id="psw"  className="form-control" required>
			<hr>

			<p>En cliquant sur s'inscrire vous acceptez nos <a href="#"> termes & conditions</a>.</p>
			<button type="submit" class="btn btn-info">S'inscrire</button>
		</div>

		<div class="container signin">
			<p>Dejà inscrit ? <a href="#">Se connecter</a>.</p>
		</div>
		</form>
	</section>

	<!-- Connexion -->
	<section>
		<form action="login_post.php" method="POST">
		<div class="container">
			<h1>Connexion</h1>
			<p>Bon retour parmi nous!</p>
			<hr>
			<label for="email"><b>Email</b></label>
			<input type="text" placeholder="Entrer Email" name="email" id="email" className="form-control" required>

			<label for="psw"><b>Password</b></label>
			<input type="password" placeholder="Entrer Password" name="psw" id="psw"  className="form-control" required>
			<hr>
			<button type="submit" class="btn btn-info">S'inscrire</button>
		</div>
		</form>
	</section>
</body>
</html>