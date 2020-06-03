<?php
  include("../admin/fonctions.php");
  if (isset($_GET["logout"]) && $_GET["logout"] == "ok"){ 
    session_destroy();
    header("location:../login.php");
  }
  if (!isset($_SESSION["admin"]))
  {
    header("location:../admin/login.php");
  } 
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <?php include("navbar.php"); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include("topbar.php"); ?>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 mb-4">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="realisationAdmin"><i class="fa fa-briefcase mx-2"></i>Mes réalisation</a></h6>
                </div>
                <div class="card-body">
                  <p>Modifier, éditer ou supprimer mes réalisations.</p>
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="messages"><i class="fa fa-envelope mx-2" aria-hidden="true"></i>Mes messages</a></h6>
                </div>
                <div class="card-body">
                  <p>Consulter ou supprimer mes messages.</p>
                </div>
              </div>
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><a href="savoirFaire"><i class="fa fa-book mx-2" aria-hidden="true"></i>Mes savoir-faire</a></h6>
                </div>
                <div class="card-body">
                  <p>Consulter, éditer ou supprimer mes savoir-faires.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
    
