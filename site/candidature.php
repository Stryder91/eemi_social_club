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
	 <!-- ======= Services Section ======= -->
	 <section id="services" class="services section-bg">
      <div class="container  p-5">

        <div class="row">
		<?php 
			$id = $_GET['id'];
			$sql = "select * from associations where _id_asso='$id'";
			$query = mysqli_query($lien,$sql);
			while ($result = mysqli_fetch_assoc($query)){
		?>
		<form class="form-group" action="candidater_post.php?id=<?php echo $id;?>" method="POST">
			<div class="container d-flex flex-column">
				<div class="d-flex justify-content-between mt-5">
					<div>
						<h3>Candidater chez </h3> <br/>
						<h1><?php echo $result['name_asso'];?></h1>
					</div>
					<div class="col-3">
						<img style="width: 100%;" src="<?php echo $result['logo_asso'];?>" alt="logo">
					</div>
				</div>
				<hr>
				<label for="email"><b>Ton adresse-email:</b></label>
				<input type="text" placeholder="Entrer Email" name="email" id="email" class="form-control" required>

				<textarea class="form-control mt-3" name="motivation" cols="30" rows="10" placeholder="Dis pourquoi tu veux rejoindre cette association"></textarea>
				<hr>
				<button type="submit" class="btn btn-info col-8 col-lg-4 m-auto">Candidater</button>
			</div>
		</form>
        <?php } ?> 

        </div>

		
      </div>
	</section><!-- End Sevices Section -->
	
	<?php include('footer.php');?>
</body>
</html>