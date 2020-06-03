<?php $base_url = "http://localhost/workshop_eemi_social_club"; ?>
<?php $base_asso = "http://localhost/workshop_eemi_social_club/site/associations.php"; ?>
<?php $base_calendar = "http://localhost/workshop_eemi_social_club/site/calendrier.php"; ?>
<?php $base_deco = "http://localhost/workshop_eemi_social_club/site/deco.php"; ?>

<?php $base_register = "http://localhost/workshop_eemi_social_club/site/register.php"; ?>

<?php $base_img = "http://localhost/workshop_eemi_social_club/assets/img/logo.png"; ?>
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
				<li><a href="#">Mon association</a></li>
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