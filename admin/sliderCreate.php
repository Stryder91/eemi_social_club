<?php
  include("../admin/fonctions.php");
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

    <title>Admin - Ajout d'image Carousel</title>
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
                    <div class="col-lg-8 m-auto">
                    <h1 class="text-center py-5">Ajouter une image au carousel</h1>
                    <div class="card shadow mb-4">
                        <form action="sliderCreate_post.php" method="post" enctype="multipart/form-data">
                            <div class="d-block card-header py-3">
                                Ajout d'une image dans le carousel
                            </div>
                            <div class="collapse show">
                                <div class="card-body">
                                    <div class="custom-file my-5">
                                    <label>Choisir une image : </label>
                                    <input type="file" name="src_slider" class="form-control custom-file-upload" enctype="multipart/form-data"/>
                                    <input type="text" name="alt_slider" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image"/>
                                    <input class="btn btn-success col-lg-4" type="submit" value="Ajouter" />
                                    </div>
                                </div>
                            </div>
                        </form>
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
    