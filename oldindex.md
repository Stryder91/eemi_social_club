<?php include("./admin/fonctions.php"); ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/logo.ico"/>
    <title>Vp-Paysagiste</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/bootstrap.css">
    <link rel="stylesheet" href="style/slider.css">
    <link rel="stylesheet prefetch" href="style/slider_autre1.css">
    <link rel="stylesheet prefetch" href="style/slider_autre2.css">
    <link rel="stylesheet" href="./admin/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://use.typekit.net/rdz1mpd.css">
</head>
<body>
    <?php include './site/index_header.php'; ?>
    <div class="col-12">
        <div class="col-lg-4 m-auto">
            <h1 class="py-5 px-4">Bienvenue chez <br> <strong>Vp-Paysagiste</strong></h1>
        </div>
    </div>
    <section class="sectionContainer mt-5 p-lg-5 m-auto">
        <h4 class="text-center">Réalisations</h4>

        <article class="img-content col-12 col-lg-10 slider-perso">


        <div class="top-slideshow mb-1">
            <div id="sync1" class="owl-carousel owl-theme">
            <?php
                $sql = "select * from slider";
                $query = mysqli_query($lien,$sql);
                while ($result = mysqli_fetch_assoc($query)){
            ?>
                <div class="item">
                    <img src="images/<?php echo $result["src_slider"]?>"/>
                </div>
                <?php } ?>
            </div>
        </div>
      

        <div class="bottom-slideshow mt-1">
            <div id="sync2" class="owl-carousel owl-theme">
            <?php
                $sql = "select * from slider";
                $query = mysqli_query($lien,$sql);
                while ($result = mysqli_fetch_assoc($query)){
            ?>
                <div class="item">
                    <img src="images/<?php echo $result["src_slider"]?>"/></div>
                <?php } ?>
            </div>
        </div>
    </article>
    </section>
    
    <div class="main">
  

    </div>
        <section class="d-flex flex-wrap col-10 m-auto justify-content-center text-center partieCroquis pt-3 pb-5">
            <article class="col-12 col-lg-5 mx-1 my-3 d-flex justify-content-center p-0">
                <div class="col-lg-12 p-0">
                    <h4 class="py-2">Etude et conception</h4>
                    <div class="col-lg-10 m-auto cardCroquis p-0 pb-2">
                        <img class="w-100" src="images/croquis.png" alt="croquis">
                        <p class="py-2 px-3 py-lg-4 px-lg-5 text-left m-0"><small>Nous vous proposons de créer le jardin ou la terrasse qui vous correspond, entièrement
                            sur mesure.</small></p>
                        <div class="col-10 col-lg-8 m-auto">
                            <form action="site/prestations.php">
                                <button type="submit" class="btn btn-decouvrir greenBG whiteColor"><small>Découvrez cette prestation</small></button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <article class="col-12 col-lg-5 mx-1 my-3 d-flex justify-content-center p-0">
                <div class="col-lg-12 p-0">
                    <h4 class="py-2">Entretien et élagage</h4>
                    <div class="col-lg-10 m-auto cardCroquis p-0 pb-2">
                        <img class="w-100" src="images/croquis2.png" alt="croquis">
                        <p class="py-2 px-3 py-lg-4 px-lg-5 text-left m-0"><small>Nous proposons nos services d'entretien et d'élagage de votre jardin ou
                            terrasse, afin que sa qualité perdure.</small></p>
                        <div class="col-10 col-lg-8 m-auto">
                            <form action="site/prestations.php">
                                <button type="submit" class="btn btn-decouvrir greenBG whiteColor"><small>Découvrez cette prestation</small></button>
                            </form>
                        </div>
                    </div>
                </div>
            </article>
            <div class="col-lg-8 m-auto pt-5">
                <form action="site/prestations.php">
                    <button class="btn btn-decouvrir greenBG whiteColor col-lg-3 py-lg-2">Contactez-moi</button>
                </form>
            </div>
        </section>

    <?php include './site/index_footer.php';?>
    <script type="text/javascript" src="script/jquery.js" ></script>

<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js'></script>

<script src="script/slider.js"></script>

</body>
</html>