<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Paiement</title>
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
	<style>
		.col-25 {
		-ms-flex: 25%; /* IE10 */
		flex: 25%;
		}

		.col-50 {
		-ms-flex: 50%; /* IE10 */
		flex: 50%;
		}

		.col-75 {
		-ms-flex: 75%; /* IE10 */
		flex: 75%;
		}

		.col-25,
		.col-50,
		.col-75 {
		padding: 0 16px;
		}
		input[type=text] {
		width: 100%;
		margin-bottom: 20px;
		padding: 12px;
		border: 1px solid #ccc;
		border-radius: 3px;
		}

		label {
		margin-bottom: 10px;
		display: block;
		}

		.icon-container {
		margin-bottom: 20px;
		padding: 7px 0;
		}

		.btn {
		background-color: #4CAF50;
		color: white;
		padding: 12px;
		margin: 10px 0;
		border: none;
		width: 100%;
		border-radius: 3px;
		cursor: pointer;
		}

		.btn:hover {
		background-color: #45a049;
		}

		span.price {
		float: right;
		color: grey;
		}

		/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (and change the direction - make the "cart" column go on top) */
		@media (max-width: 800px) {
		.row {
			flex-direction: column-reverse;
		}
		.col-25 {
			margin-bottom: 20px;
		}
	}
	</style>
</head>
<body>
	<?php include('header.php');?>
	<section class="container mt-5 pt-5">
		<div class="row mt-5">
		<div class="col-75">
			<div class="container">
			<form action="/action_page.php">

				<div class="row">
				<div class="col-50">
					<h3>Adresse de facturation</h3>
					<label for="fname"><i class="fa fa-user"></i> Nom prénom</label>
					<input type="text" id="fname" name="firstname" placeholder="John M. Doe">
					<label for="email"><i class="fa fa-envelope"></i> Email</label>
					<input type="text" id="email" name="email" placeholder="john@example.com">
					<label for="adr"><i class="fa fa-address-card-o"></i> Adresse</label>
					<input type="text" id="adr" name="address" placeholder="15 rue des bananiers">
					<label for="city"><i class="fa fa-institution"></i> Ville</label>
					<input type="text" id="city" name="city" placeholder="Paris">

					<div class="row">
					<div class="col-50">
						<label for="state">Etat</label>
						<input type="text" id="state" name="state" placeholder="FR">
					</div>
					<div class="col-50">
						<label for="zip">Code postal</label>
						<input type="text" id="zip" name="zip" placeholder="75001">
					</div>
					</div>
				</div>

				<div class="col-50">
					<h3>Paiement</h3>
					<label for="cname">Nom sur la carte</label>
					<input type="text" id="cname" name="cardname" placeholder="John More Doe">
					<label for="ccnum">Numéro de crédit</label>
					<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
					<label for="expmonth">Expiration mois</label>
					<input type="text" id="expmonth" name="expmonth" placeholder="Septembre">

					<div class="row">
					<div class="col-50">
						<label for="expyear">Expiration année</label>
						<input type="text" id="expyear" name="expyear" placeholder="2018">
					</div>
					<div class="col-50">
						<label for="cvv">CVV</label>
						<input type="text" id="cvv" name="cvv" placeholder="352">
					</div>
					</div>
				</div>

				</div>
				<input type="submit" value="Continuer" class="btn col-lg-5">
			</form>
			</div>
		</div>

		<div class="col-25">
			<div class="container">
			<h4>Carte			</h4>
			<p><a href="#">Souscription </a> <span class="price">15 €</span></p>
			<hr>
			<p>Total <span class="price" style="color:black"><b>15 €</b></span></p>
			</div>
		</div>
		</div>
	</section>
	<?php include('footer.php');?>
</body>
</html>