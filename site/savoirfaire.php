<?php include("../admin/fonctions.php"); ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../images/logo.ico"/>
    <title>Savoir-faire</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="stylesheet" href="../style/bootstrap.css">
</head>
<body>
    <?php include("header.php"); ?>
    <div class="col-12">
        <div class="col-lg-4 m-auto">
            <h1 class="py-lg-5 px-lg-4">Découvrez notre <br> <strong>Savoir-faire</strong></h1>
        </div>
    </div>
    <?php
        $sql = "select * from sf_presentation";
        $query = mysqli_query($lien,$sql);
        
        while ($result = mysqli_fetch_assoc($query)){
            echo("<div class=\"col-lg-7 p-lg-5 p-4 m-auto\">");
                echo("<h4 class=\"font-weight-bold\">".$result["sous_titre_sf"]."</h4>");
                echo("<p>".$result["contenu_sf"]."</span>");
                echo("</p>");
            echo("</div>");
        } 
    ?>
    <section class="col-12 sectionContainer d-flex flex-wrap justify-content-center text-center">
        <h3 class="text-left col-12 col-lg-8 m-auto pt-4 pb-5">Nous intervenons dans:</h3>
<!--BLOC DESKTOP-->
        <article class="d-none d-lg-flex justify-content-center col-lg-12 m-auto">
            <div class="col-2  item-section col-2  m-2 text-center">
                <div class="imgContainerSV p-5">
                    <img class="w-100" src="../images/tree.png" alt="tree">
                </div>
                <h5 class="py-5">Les jardins</h5>
            </div>
            <div class="col-2  item-section col-2  m-2 text-center">
                <div class="imgContainerSV p-5">
                    <img class="w-100" src="../images/terrace.png" alt="terrace">
                </div>
                <h5 class="py-5">Les terrasses et balcons</h5>
            </div>
            <div class="col-2  item-section col-2 m-2 text-center">
                <div class="imgContainerSV p-5">
                    <img class="w-100" src="../images/boat.png" alt="boat">
                </div>
                <h5 class="py-5">Les bateaux</h5>
            </div>
            <div class="col-2 item-section col-2 m-2 text-center">
                <div class="imgContainerSV p-5">
                    <img class="w-100" src="../images/store.png" alt="store">
                </div>
                <h5 class="py-5">Les hôtels ou restaurants</h5>
            </div>
        </article>
        <article>
            <ul class="mobile-ul-li-styled d-lg-none">
                <li>Les jardins de ville ou de famille</li>
                <li>Les terrasses et balcons</li>
                <li>Les restaurants et les hôtels</li>
                <li>Les bateaux</li>
            </ul>
        </article>
    </section>
    <section class="col-12 sectionPrestation d-flex flex-wrap justify-content-center text-center">
        <h3 class="text-left col-12 col-lg-8 m-auto pt-4 pb-5">Nous offrons une prestation complète:</h3>
        <article>
            <ul class="mobile-ul-li-styled d-lg-none">
            <?php
                $sql = "select * from savoir_faire";
                $query = mysqli_query($lien,$sql);

                while ($result = mysqli_fetch_assoc($query)){
                    echo("<li>". $result["libelle_savoirfaire"]."</li>");
                } 
            ?>
            </ul>
        </article>  
        <ul class="d-none d-lg-flex flex-wrap col-10 justify-content-center">
            <?php
                $sql = "select * from savoir_faire";
                $query = mysqli_query($lien,$sql);

                while ($result = mysqli_fetch_assoc($query)){
                    echo("<li class=\"item-prestation px-5 font-weight-bold px-2 py-4 my-1 mx-2\">".$result["libelle_savoirfaire"]."</li>");
                } 
            ?>
        </ul>
        <div class="col-12 col-lg-8 my-5">
            <a href="prestations.php">
                <!-- <button class="btn btn-decouvrir greenBG whiteColor col-8 col-lg-3 m-auto">Contactez-moi</button> -->
                <button class="btn btn-decouvrir greenBG whiteColor col-lg-3 py-lg-2">Contactez-moi</button>
            </a>
        </div>
    </section>
    <?php include("footer.php"); ?>
</body>
</html>