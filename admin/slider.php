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
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Slider d'images</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <div id="wrapper">
  <?php include ("navbar.php"); ?>
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <?php include("topbar.php"); ?>
        <div class="container-fluid">
          <h2 class="h3 mb-4 text-gray-800">Mes images de slider</h2>
            <div class="row">
                <?php
                $sql = "select * from slider";
                $query = mysqli_query($lien,$sql);
                
                while ($result = mysqli_fetch_assoc($query)){
              echo("<div class=\"col-lg-9 m-auto\">");
                echo("<div class=\"card bg-light mb-3\" id=\"hello\">");
                  echo("<div class=\"card-header\">Titre: ".$result["alt_slider"]."</div>");
                  echo("<div class=\"card-body\">");
                  echo("<form action=\"slider_post.php\" method=\"post\" enctype=\"multipart/form-data\">");
                    echo("<input type=\"hidden\" value=\"". $result["_id_slider"]."\" name=\"id_slider\">");
                    echo("<img style=\"width:100%;\" src=\"../images/".$result["src_slider"]."\" alt=\"".$result["alt_slider"]."\"/>");
                    echo("<div class=\"custom-file\">");
                      echo("<input type=\"file\" name=\"src_slider\" class=\"form-control custom-file-upload my-3\"/>");
                    echo("</div>");
                    echo("<input type=\"text\" class=\"form-control my-4\" name=\"alt_slider\" value=\"". $result["alt_slider"]."\">");
                    echo("<button type=\"submit\" class=\"btn btn-warning\">Changer</button>");
                    echo("</form>");
                    echo("<form class=\"my-2\" action=\"sliderDel_post.php\" method=\"post\">");
                      echo("<input type=\"hidden\" value=\"". $result["_id_slider"]."\" name=\"id_slider\">");
                      echo("<button type=\"submit\" class=\"btn btn-danger\">Supprimer</button>");
                    echo("</form>");
                    echo("</div>");
                  echo("</div>");
                echo("</div>");
                echo("<div>");
              echo("</div>");
                }
                ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <div class="custom-file my-5">
    <label>Choisir une image : </label>
    
    <input type="text" name="alt_slider" class="form-control mt-2 mb-5" placeholder="Choisir une description pour l'image"/>
    <input class="btn btn-success col-lg-4" type="submit" value="Ajouter" />
  </div> -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/sb-admin-2.min.js"></script>
</body>
</html>
