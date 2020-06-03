<?php

  include("../admin/fonctions.php");

if (!empty($_POST))
{
  $sql = "select * from admin";
  $query = mysqli_query($lien,$sql);
  $result = mysqli_fetch_assoc($query);
  
  $identifiant = $_POST["name_admin"];
  $password = md5($_POST["psw_admin"]);

  if (($identifiant != $result["pseudo"]) or ($password != $result["password"]))
	{
		echo("<p>Erreur d'authentification !</p>");
	}
	else
	{
    echo("ALL FINE");
		$_SESSION["admin"] = $identifiant;
		header("location:../admin/index.php");
	}
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
  <title>Admin - Login</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body class="vertBG">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-xl-10 col-lg-12 col-md-9">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Espace admin</h1>
                  </div>
                  <form class="user" method="post" action="login.php">
                    <div class="form-group">
                      <input name="pseudo" type="text" class="form-control form-control-user" placeholder="Back office pseudo">
                    </div>
                    <div class="form-group">
                      <input name="password" type="password" class="form-control form-control-user" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block btn-hover-vert"> Login </button>
                    <hr>
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" data-toggle="modal" data-target="#exampleModal">Forgot Password?</a>
                  </div>

                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <form action="resetMdp.php" method="post">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <input type="text" name="pseudo_reset" class="form-control" placeholder="pseudo">
                            <input type="password" name="mdp_reset" class="form-control" placeholder="new password">
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Envoyer </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
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
