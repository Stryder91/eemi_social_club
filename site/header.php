<!-- http://ltran.eemi.tech/Lionel/workshop_eemi_social_club/ -->

<?php 
$distant = 'http://ltran.eemi.tech/Lionel/workshop_eemi_social_club';
$local = 'http://localhost/workshop_eemi_social_club';

$base_url = $distant; 
$base_asso = $distant."/site/associations.php";
$base_calendar = $distant."/site/calendrier.php";
$base_deco = $distant."/site/deco.php";
$base_register = $distant."/site/register.php"; 
$base_img = $distant."/assets/img/logo.png"; 

// Logged
$base_asso_perso = $distant."/admin/backoffice.php"; 

?>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="<?php echo $base_url ?>" class="logo mr-auto"><img src="<?php echo $base_img;?>" alt="logo" class="img-fluid"></a>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
			<li class="active"><a href="<?php echo $base_url ?>">Home</a></li>
			<li><a href="<?php echo $base_asso ?>">Associations</a></li>
			<li><a href="<?php echo $base_calendar ?>">Calendrier</a></li>
			<li><a href="<?php echo $base_url?>#contact">Contact</a></li>
			<li><a href="https://www.eemi.com/ecole/admission/">Rejoindre l'EEMI</a> </li>
			<?php 
				if(!isset($_SESSION['email'])){
			?>
			<li class="pt-1"> <a href="<?php echo $base_register;?>" class="get-started-btn white scrollto">Connexion</a></li>
			<?php
				};
			?>
			<?php 
				if(isset($_SESSION['email'])){
			?>
			<li class="drop-down"><a href="">Espace membre</a>
			<ul>
				<li><a href="<?php echo $base_asso_perso ?>">Mes associations</a></li>
				<li><a href="<?php echo $base_calendar ?>">Calendrier partagé</a></li>
				<li><a href="#">Gestion utilisateurs</a></li>
				</ul>
			</li>
			<li><a href="<?php echo $base_deco ?>" class="scrollto">Déconnexion</a></li>
			<?php
				};
			?>
			

        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </header><!-- End Header -->