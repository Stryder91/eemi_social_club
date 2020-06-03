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

    <title>Admin - Créations de réealisations</title>
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
                    <h1 class="text-center py-5">Créer ma réalisation</h1>
                    <div class="card shadow mb-4">
                        <form action="realisationAdminCreate_post.php" method="post" enctype="multipart/form-data">
                            <div class="d-block card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">
                                <input type="text" name="titre_real" class="form-control" placeholder="Choisir mon titre" required> 
                                </h6>
                            </div>
                            <div class="collapse show">
                                <div class="card-body">
                                    <label>Le type de la réalisation : </label>
                                    <select name="type_real" class="form-control my-4">
                                        <option value="#"></option>
                                        <option value="dallage">Dallage</option>
                                        <option value="travailBois">Travail du bois</option>
                                        <option value="jardin">Jardin</option>
                                        <option value="galerie">Galerie</option>
                                    </select>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src0_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt0_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 1"/>
                                    </div>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src1_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt1_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 2"/>
                                    </div>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src2_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt2_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 3"/>
                                    </div>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src3_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt3_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 4"/>
                                    </div>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src4_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt4_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 5"/>
                                    </div>
                                    <div class="custom-file my-5">
                                        <label>Choisir une image : </label>
                                        <input type="file" name="src5_real" class="form-control custom-file-upload"/>
                                        <input type="text" name="alt5_real" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image 6"/>
                                    </div>
                                    <div class="my-5">
                                        <textarea name="contenu_real" class="form-control my-3" cols="30" rows="10" placeholder="Choisir le contenu de ma réalisation"></textarea>
                                    </div>
                                    <div class="col-md-4 m-auto">
                                        <input class="btn btn-success col-12" type="submit" value="Go" />
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
    