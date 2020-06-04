<?php include("../admin/fonctions.php"); 
	$myId = $_GET['id'];
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Associations</title>
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
      <div class="container py-5">


        <div class="row d-flex justify-content-center">
		<?php 
		
		$sql = "select * from associations where _id_asso='$myId'";
		$query = mysqli_query($lien,$sql);
		$result = mysqli_fetch_assoc($query);
        ?>
			<div class="d-flex"  data-aos-delay="100">
			<div class="icon-box iconbox-blue">
				<div class="icon">
				<img style="width: 100%;" src="<?php echo $result['logo_asso'];?>" alt="logo">
				<!-- <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
					<path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
				</svg> -->
				<!-- <i class="bx bxl-dribbble"></i> -->
				</div>
				<h4><?php echo $result['name_asso'];?></h4>
				<p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
			</div>
			</div>
		</div>
		<!-- ======= Pricing Section ======= -->
		<section id="pricing" class="pricing">
		<div class="container">

			<div class="section-title">
			<h2>Rejoindre cette asso' ?</h2>
			<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="row d-flex justify-content-center">

			<div class="col-lg-4 col-md-6">
				<div class="box">
				<h3>Membre</h3>
				<h4><sup>$</sup>19<span> / month</span></h4>
				<ul>
					<li>Aida dere</li>
					<li>Nec feugiat nisl</li>
					<li>Nulla at volutpat dola</li>
					<li class="na">Pharetra massa</li>
					<li class="na">Massa ultricies mi</li>
				</ul>
				<div class="btn-wrap">
					<a href="#" class="btn-buy">Rejoindre!</a>
				</div>
				</div>
			</div>

			</div>

		</div>
		</section><!-- End Pricing Section -->
		
	</div>
	</section><!-- End Sevices Section -->
	
	<?php include('footer.php');?>
</body>
</html>