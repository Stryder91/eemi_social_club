<?php include("../admin/fonctions.php"); ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../images/logo.ico"/>
    <title>L'entreprise</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.css">
    <style>
    .photo-profil {
        height: 300px;
        max-height: 400px;
        background-size: contain;
        background-repeat: no-repeat;
    }
    @media screen and (max-width: 640px) {
        .photo-profil {
            width: 200px;
            height: 200px;
        }
        section {
            font-size: 0.80em;
        }
        h5 {
            font-size: 1.25em;
        }
    }
    </style>
</head>
<body>
    <?php include("header.php"); ?>
    <div class="col-12">
        <div class="col-lg-4 m-auto">
            <h1 class="py-lg-5 px-lg-4">Découvrez <br> <strong>Notre entreprise</strong></h1>
        </div>
    </div>
    <section class="col-12 col-lg-6 m-auto d-flex flex-wrap text-center">
        <h5 class="col-lg-7 m-auto py-3 text-left text-lg-center font-weight-bold">Qui est votre Victor Prevost ?</h5>
        <div class="col-12 m-auto d-flex flex-wrap">
        <?php
            $sql = "select * from entreprise where _id_entreprise=1";
            $query = mysqli_query($lien,$sql);
            
        while ($result = mysqli_fetch_assoc($query)){ ?>
            <p class="greyDarkColor col-6 col-lg-12 p-1 px-lg-5 text-left text-lg-center"><?php echo $result["description_victor"] ?></p>
            <div class="col-6 col-lg-4 m-auto d-flex justify-content-center photo-profil" style="background-image:url(../images/<?php echo $result["img_entreprise"]; ?>);">
            </div>
        </div>
        <article class="text-right text-lg-left my-lg-5">
            <h5 class="p-3 font-weight-bold">Pourquoi nous faire confiance ? </h5>
            <p class="greyDarkColor px-3"><?php echo $result["description_entreprise"] ?></p>
            <div class="d-none d-lg-flex flex-wrap justify-content-center">
                <img class="m-2" src="../images/entreprise.png" alt="jardin numero 1">
                <img class="m-2" src="../images/entreprise2.png" alt="jardin numero 2">
                <img class="m-2" src="../images/entreprise3.png" alt="jardin numero 3">  
            </div>
        </article>
        <article class="d-flex flex-wrap justify-content-center text-left text-lg-center my-lg-5">
            <h5 class="col-lg-7 m-auto py-3 font-weight-bold">Pourquoi nous ?</h5>
            <p class="col-12 greyDarkColor"><span class="greenColor trente"><?php echo $result["nombre_confiance"] ?></span> <span class="font-weight-bold"><?php echo $result["description_confiance"] ?></span></p>
            <div class="d-none d-lg-block col-lg-6">
                <img class="w-70" src="../images/confiance.png" alt="garantie de confiance">
            </div>
        </article>
        <article class="col-lg-12 m-auto">
            <form action="prestations.php" class="my-5">
                <button type="submit" class="btn btn-decouvrir greenBG whiteColor col-9 col-lg-3 py-lg-2">Contactez-moi</button>
            </form>
        </article>
        <?php } ?>
    </section>

    <?php include("footer.php"); ?>
</body>
</html>