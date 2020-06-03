<!-- http://ltran.eemi.tech/Lionel/workshop_eemi_social_club/ -->

<?php 
$distant = 'http://ltran.eemi.tech/Lionel/workshop_eemi_social_club/';
$local = 'http://localhost/workshop_eemi_social_club';

$base_url = $local; 
$base_asso = $local."/site/associations.php";
$base_calendar = $local."/site/calendrier.php";
$base_deco = $local."/site/deco.php";
$base_register = $local."/site/register.php"; 
$base_img = $local."/assets/img/logo.png"; 

// Logged
$base_asso_perso = $local."/site/asso_perso.php"; 

?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="<?php echo $base_url ?>" class="logo mr-auto"><img src="<?php echo $base_img;?>" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
			<li class="active"><a href="<?php echo $base_url ?>">Home</a></li>
			<li><a href="<?php echo $base_asso ?>">Associations</a></li>
			<li><a href="<?php echo $base_calendar ?>">Calendrier</a></li>
			<?php 
				if(isset($_SESSION['email'])){
					?>
			<li><a href="<?php echo $base_asso ?>">Candidature</a></li>
			<li class="drop-down"><a href="">Espace membre</a>
			<ul>
				<li><a href="<?php echo $base_asso_perso ?>">Mes associations</a></li>
				<li><a href="#">Calendrier partagé</a></li>
				<li><a href="#">Candidatures</a></li>
				<li><a href="#">Evènements internes</a></li>
				<li><a href="#">Gestion utilisateurs</a></li>
				</ul>
			</li>
			<?php
			}
			?>
			<li><a href="#portfolio">Dons & cotisations</a></li>
			<?php 
				if(!isset($_SESSION['email'])){
			?>
			<li> <a href="<?php echo $base_register;?>" class="get-started-btn white scrollto">Commencer</a></li>
			<?php
				};
			?>
			<?php 
				if(isset($_SESSION['email'])){
			?>
			<li><a href="<?php echo $base_deco ?>" class="scrollto">Déconnexion</a></li>
			<?php
				};
			?>
			<li><a href="<?php echo $base_url?>#contact">Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->