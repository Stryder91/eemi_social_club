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

    <title>Admin - Realisations</title>
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

            <h1 class="text-center py-5">Mes réalisations</h1>
            <?php
                $sql = "select * from realisation";
                $query = mysqli_query($lien,$sql);

                while ($result = mysqli_fetch_assoc($query)){
                echo("<div class=\"card shadow mb-4\" id=\"accordion\">");
                    echo("<form method=\"post\" action=\"realisationAdmin_post.php\" enctype=\"multipart/form-data\">");

                        //HEADER POUR CONTENIR LE TITRE DE LA REAL
                        echo("<span data-toggle=\"collapse\" data-target=\"#ID" . $result["_id_realisation"] . "\" class=\"d-block card-header py-3\">");
                            echo("<h6 class=\"m-0 font-weight-bold text-primary px-5\">");
                                echo("<input name=\"titre_realisation\" class=\"form-control\" type=\"text\" value=\"". $result["titre_realisation"] ."\"/>");
                            echo("</h6>");
                        echo("</span>");


                        echo("<div id=\"ID" . $result["_id_realisation"] . "\" class=\"collapse\" data-parent=\"#accordion\">");
                            echo("<div class=\"card-body\">");

                            //BLOC IMAGES
                                // 1 ____
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 1</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["_id_realisation"]."\" name=\"id_real\">");
                                echo("<input type=\"hidden\" value=\"". $result["src1_realisation"]."\" name=\"src1_realisation\">");
                                echo("<img src=\"../images/". $result["src1_realisation"] ."\" alt=\"". $result["alt1_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src1_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Un\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt1_realisation\" value=\"". $result["alt2_realisation"]."\">");
                                // 2 __
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 2</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["src2_realisation"]."\" name=\"src2_realisation\">");
                                echo("<img src=\"../images/". $result["src2_realisation"] ."\" alt=\"". $result["alt2_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src2_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Deux\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt2_realisation\" value=\"". $result["alt2_realisation"]."\">");

                                // 3 __
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 3</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["src3_realisation"]."\" name=\"src3_realisation\">");
                                echo("<img src=\"../images/". $result["src3_realisation"] ."\" alt=\"". $result["alt3_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src3_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Trois\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt3_realisation\" value=\"". $result["alt3_realisation"]."\">");

                                // 4 __
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 4</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["src4_realisation"]."\" name=\"src4_realisation\">");
                                echo("<img src=\"../images/". $result["src4_realisation"] ."\" alt=\"". $result["alt4_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src4_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Quatre\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt4_realisation\" value=\"". $result["alt4_realisation"]."\">");

                                // 5 __
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 5</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["src5_realisation"]."\" name=\"src5_realisation\">");
                                echo("<img src=\"../images/". $result["src5_realisation"] ."\" alt=\"". $result["alt5_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src5_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Cinq\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt5_realisation\" value=\"". $result["alt5_realisation"]."\">");

                                // 6 __
                                echo("<h5 class=\"text-center font-weight-bold pt-5\">Image numéro 6</h5>");
                                echo("<input type=\"hidden\" value=\"". $result["src6_realisation"]."\" name=\"src6_realisation\">");
                                echo("<img src=\"../images/". $result["src6_realisation"] ."\" alt=\"". $result["alt6_realisation"] ."\" class=\"col-12\"/>");
                                echo("<div class=\"input-group my-3\">");
                                    echo("<div class=\"custom-file\">");
                                        echo("<input name=\"src6_realisation\" type=\"file\" id=\"".$result["_id_realisation"]."Six\">");
                                    echo("</div>");
                                echo("</div>");
                                echo("<input type=\"text\" class=\"form-control\" placeholder=\"Description de l'image\" name=\"alt6_realisation\" value=\"". $result["alt6_realisation"]."\">");


                            //    FIN DES BLOC IMAGES 
                                echo("<hr/>");
                                echo("<div class=\"col-12 mt-5\">");
                                    echo("<span class=\"my-2\">Le type de ma réalisation: </span>");
                                    echo("<select name=\"type_realisation\" class=\"form-control\">");
                                    $type = array("dallage", "travailBois","jardin", "galerie");
                                    foreach ($type as &$value) {
                                        echo("<option value=\"". $value ."\"");
                                            if($result["type_realisation"] === $value){
                                                echo("selected=\"selected\"");
                                            }
                                        echo(">". $value."</option>");
                                    }
                                    echo("</select>");
                                echo("</div>");
                                echo("<textarea id=\"".$result["_id_realisation"]."\" name=\"contenu_realisation\" value=\"" . $result["contenu_realisation"] . "\"class=\"form-control my-3\" rows=\"5\" col=\"10\">".$result["contenu_realisation"]." </textarea>");
                            echo("</div>");
                        echo("</div>");
                        echo("<button type=\"submit\" class=\"btn btn-warning btn-icon-split m-3\">");
                            echo("<span class=\"icon text-white-50\">");
                            echo("<i class=\"fa fa-file\"></i>");
                            echo("</span>");
                            echo("<span class=\"text\">Editer</span>");
                        echo("</button>");
                    echo("</form>");
                    echo("<form method=\"post\" action=\"realisationAdminDel_post.php\" class=\"col-lg-6 p-0\">");
                        echo("<input type=\"hidden\" value=\"". $result["_id_realisation"]."\" name=\"id_real\">");
                        echo("<button type=\"submit\" class=\"btn btn-danger btn-icon-split m-3\">");
                            echo("<span class=\"icon text-white-50\">");
                            echo("<i class=\"fas fa-trash\"></i>");
                            echo("</span>");
                            echo("<span class=\"text\">Supprimer</span>");
                        echo("</button>");
                    echo("</form>");
                echo("</div>");
                } 
            ?>
                </div>
            </div>
        </div>
        </div>
    </div>

    </div>
    <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
    </a>

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
    