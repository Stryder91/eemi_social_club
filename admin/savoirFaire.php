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

    <title>Admin - Savoir-faire</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
    ul, li { list-style: none;}
    </style>
</head>

<body id="page-top">
    <div id="wrapper">

    <?php include("navbar.php"); ?>
    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

        <?php include("topbar.php"); ?>

        <div class="container-fluid">

            <div class="row"> 
                <section class="col-md-6">
                <h2 class="col-12">Présentation du savoir-faire</h2>
                <?php
                    $sql = "select * from sf_presentation";
                    $query = mysqli_query($lien,$sql);
                    
                    while ($result = mysqli_fetch_assoc($query)){
                        echo("<form class=\"col-12 d-flex flex-wrap justify-content-center\" action=\"sf_post.php\" method=\"post\">");
                        echo("<input class=\"col-md-7 form-control my-3\" type=\"text\" 
                        name=\"titre_sf\"
                            value=\"". $result["titre_sf"]."\">");
                            echo("<input class=\"col-md-7 form-control\" type=\"text\" 
                            name=\"sous_titre_sf\"
                            value=\"". $result["sous_titre_sf"]."\">");
                            echo("<textarea class=\"col-md-7 my-3 form-control\" name=\"contenu_sf\" cols=\"30\" rows=\"10\">".$result["contenu_sf"]."</textarea>");
                            echo("<button type=\"submit\" class=\"btn btn-warning col-6\">Changer</button>");
                            echo("</form>");
                    } 
                ?>
                </section>
                <section class="col-md-6 my-5 m-md-0">  
                    <ul class="p-0">
                        <h2 class="col-12">Liste des prestations</h2>
                        <?php
                        $sql = "select * from savoir_faire";
                        $query = mysqli_query($lien,$sql);
                            
                        while ($result = mysqli_fetch_assoc($query)){
                        echo("<form class=\"col-12\" action=\"savoirFaire_post.php\" method=\"post\">");
                            echo("<li class=\"d-flex flex-wrap\">");
                            echo("<input class=\"form-control col-12 col-md-7 my-3\" type=\"text\" 
                                name=\"savoirfaire\"
                                value=\"". $result["libelle_savoirfaire"]."\">");
                            echo("<input type=\"hidden\" 
                                name=\"id_savoirfaire\"
                                value=\"". $result["_id_savoirfaire"]."\">");
                            echo("<button type=\"submit\" class=\"btn btn-success col-md-2 my-3 mx-3\">Changer</button>");
                            echo("</li>");
                        echo("</form>");
                        } 
                        ?>
                    </ul>
                </section>
            </div>
        </div>
        </div>
    </div>

    </div>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
    