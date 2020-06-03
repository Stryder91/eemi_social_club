<?php include("../admin/fonctions.php"); ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../images/logo.ico"/>
    <title>Contactez-moi</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.css">
</head>
<body>
    <?php include("header.php"); ?>
    <h1 class="col-md-6 m-auto pb-3 pb-md-0 pt-md-5 px-4">Contactez-moi </h1>
    <h3 class="col-md-6 m-auto pt-md-5 px-4 troistroistrois">Remplissez ce formulaire pour me poser une question.</h3>
    <section class="sectionContainer mt-5 p-1 p-md-5">
        <form action="prestations_post.php" method="post">
            <div class="col-12 col-md-8 m-auto">
                <div class="mt-2 mb-5">
                    <label for="email">Adresse email : </label>
                    <input class="form-control" type="email" name="email" id="email" placeholder="Exemple : adresse@gmail.com" required>
                </div>
                <div class="mt-2 mb-5">
                    <label for="type">Type de demande </label>
                    <select name="type" id="type" class="form-control">
                        <option value="jardin">Jardin japonais</option>
                        <option value="dallage">Dallage</option>
                        <option value="travailBois">Travail du bois</option>
                        <option value="galerie">Galerie</option>
                    </select>
                </div>
                <div class="my-3">
                    <label for="area">Ajouter des détails à votre demande </label>
                    <textarea name="message" id="area" cols="30" rows="10" class="form-control" required></textarea>
                    <span>500 caractères max</span>
                </div>
                <div class="col-12 d-flex justify-content-md-center">
                    <button class="btn btn-decouvrir greenBG whiteColor col-lg-4">Contactez-moi</button>
                </div>
            </div>
        </form>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>