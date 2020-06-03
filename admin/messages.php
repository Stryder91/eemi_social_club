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

  <title>Admin - Messages</title>

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
          <h2 class="h3 mb-4 text-gray-800">Vos messages</h2>
            <div class="row">
              <div class="col-lg-9 m-auto">
                <?php
                $sql = "select * from message ORDER BY date_message DESC";
                $query = mysqli_query($lien,$sql);

                while ($result = mysqli_fetch_assoc($query)){
                  echo("<div class=\"card shadow mb-4\">");
                    echo("<div class=\"card-header py-3 d-flex justify-content-between\">");
                    echo("<h6 class='m-0 font-weight-bold text-primary'>De " . $result["email_message"] . " </h6>");
                    echo("<span>Date : " .$result["date_message"] . " </span>");
                    //Flag type of request
                    echo("<button class=\"btn ");
                    if ($result["type_message"] == "bateau"){
                      echo("btn-primary");
                    }
                    elseif ($result["type_message"] == "terrasse"){
                      echo("btn-warning");
                    }
                    elseif ($result["type_message"] == "hotel"){
                      echo("btn-info");
                    }
                    elseif ($result["type_message"] == "balcon"){
                      echo("btn-secondary");
                    }
                    else {
                      echo("btn-secondary");
                    }
                    echo(" btn-icon-split\">");
                    echo("<span class=\"icon text-white-50\">");
                      echo("<i class=\"fas fa-flag\"></i>");
                    echo("</span>");
                    echo("<span class=\"text\"> Type " . $result["type_message"] . " </span>");
                    echo("</button>");
                    echo("</div>");
                    echo("<form method=\"post\" action=\"messages_post.php\">");
                      echo("<div class=\"card-body\">");
                        echo("<p class=\"type_message\"> Type de demande : " .$result["type_message"] . " </p>");
                        echo("<p class=\"body_message\"> " .$result["contenu_message"] . " </p>");
                        echo("<section class=\"d-flex justify-content-between \">");
                        
                          //Invisible input and submit button
                          echo("<input type=\"hidden\" value=\"" . $result["_id_message"] . "\" name=\"id_message\"/>");
                          echo("<button type=\"submit\" class=\"btn btn-danger btn-icon-split\">");
                            echo("<span class=\"icon text-white-50\">");
                              echo("<i class=\"fas fa-trash\"></i>");
                            echo("</span>");
                            echo("<span class=\"text\">Supprimer</span>");
                          echo("</button>");

                        echo("</section>");
                        echo("</div>");
                      echo("</div>");
                    echo("</form>");
                } 
              ?>
            </div>
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
