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

    <title>Entreprise - Savoir-faire</title>
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
                <h2 class="col-12">Présentation de l'entreprise</h2>
                <?php
                    $sql = "select * from entreprise where _id_entreprise=1";
                    $query = mysqli_query($lien,$sql);
                    
                    while ($result = mysqli_fetch_assoc($query)){
                    echo("<form class=\"col-12 justify-content-center\" action=\"entrepriseAdmin_post.php\" method=\"post\" enctype=\"multipart/form-data\">");
                        echo("<textarea class=\"col-md-7 form-control my-3\" cols=\"30\" rows=\"10\"
                            name=\"description_victor\"
                            >". $result["description_victor"]."</textarea>");
                        echo("<textarea class=\"col-md-7 form-control\" cols=\"30\" rows=\"10\"
                            name=\"description_entreprise\"
                            >". $result["description_entreprise"]."</textarea>");
                        echo("<input class=\"col-md-7 form-control\" type=\"text\" 
                            name=\"nombre_confiance\"
                            value=\"". $result["nombre_confiance"]."\">");
                        echo("<textarea class=\"col-md-7 form-control\" cols=\"30\" rows=\"10\"
                            name=\"description_confiance\"
                            >". $result["description_confiance"]."</textarea>");
                        // Ajout image 
                        echo("<div class=\"my-3\">");
                            echo("<label>Choisir une photo de présentation</label>");
                            echo("<input class=\"col-12 my-3\" name=\"img_entreprise\" type=\"file\">");
                        echo("</div>");

                        echo("<button type=\"submit\" class=\"btn btn-warning col-6\">Editer</button>");
                    echo("</form>");
                    } 
                ?>
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
    