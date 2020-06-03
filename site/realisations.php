<?php include("../admin/fonctions.php"); ?>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Réalisations</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="shortcut icon" type="image/png" href="../images/logo.ico"/>
    <link rel="stylesheet" href="../style/bootstrap.css">
    <link rel="stylesheet" href="../admin/vendor/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<?php include("header.php"); ?>
    <section class="d-flex flex-wrap justify-content-center">
        <div class="col-12">
            <div class="col-lg-4 m-auto">
                <h1 class="py-lg-5 px-lg-4">Découvrez <br> <strong>Nos réalisations</strong></h1>
            </div>
        </div>
        <nav class="col-12 navbar navbar-expand-lg navbar-dark primary-color text-center ">
            <!--De base class "collapse" -->
            <div class="navbar-collapse">
                <ul class="navbar-nav mr-auto text-center m-auto navbar-real">
                    <li class="nav-item">
                        <a class="nav-link" href="realisations.php">Tout</a>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if(isset($_GET['type']) && $_GET['type']=="dallage"){
                            $classeBalcon = "font-weight-bold blackColor mx-2";
                        } else {$classeBalcon = "";}
                        echo("<a class=\"nav-link " .$classeBalcon. "\" href=\"realisations.php?type=dallage\">Dallage</a>");
                    ?>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if(isset($_GET['type']) && $_GET['type']=="travailBois"){
                            $classeBalcon = "font-weight-bold blackColor mx-2";
                        } else {$classeBalcon = "";}
                        echo("<a class=\"nav-link " .$classeBalcon. "\" href=\"realisations.php?type=travailBois\">Travail du bois</a>");
                    ?>
                    </li>
                    <li class="nav-item">
                        <?php 
                        if(isset($_GET['type']) && $_GET['type']=="jardin"){
                            $classeJardin = "font-weight-bold blackColor mx-2";
                        } else {$classeJardin = "";}
                        echo("<a class=\"nav-link " .$classeJardin. "\" href=\"realisations.php?type=jardin\">Jardins japonais</a>");
                    ?>
                    </li>
                    <li class="nav-item">
                    <?php 
                        if(isset($_GET['type']) && $_GET['type']=="galerie"){
                            $classeBateau = "font-weight-bold blackColor mx-2";
                        } else {$classeBateau = "";}
                        echo("<a class=\"nav-link " .$classeBateau. "\" href=\"realisations.php?type=galerie\">Galerie</a>");
                    ?>
                    </li>
                </ul>
            </div>
        </nav>
    </section>
    <section class="d-flex flex-wrap justify-content-center my-4">
    
    <?php
        $class = "col-lg-3";
        $class_img = "img-real-petit";
        $col_btn = "";
        $retour = "";
        if(isset($_GET['type'])){
            $type = $_GET['type'];
            $sql = "select * from realisation where type_realisation='".$type."'";
        } elseif (isset($_GET['id'])){
            $sql = "select * from realisation where _id_realisation='".$_GET['id']."'";
            $class = "col-md-8";
            $class_img = "img-real-grand";
            $col_btn = "col-10 col-lg-4";
            $retour = "Retourner à la galerie";
        } else {
            $sql = "select * from realisation";
        }
        $query = mysqli_query($lien,$sql);
        
        while ($result = mysqli_fetch_assoc($query)){
            if (isset($_GET['id'])){
                echo("<div class=\"col-12 ml-2\">");
                echo("<a href=\"realisations.php\" class=\"px-5\">");
                    echo("<p class=\"greenColor\"><i class=\"fa fa-arrow-left mx-1\" aria-hidden=\"true\"></i>". $retour ."</p>");
                echo("</a>");
                echo("</div>");
            }
            ?>
            
            <article class="col-12 <?php echo $class ?> mx-1 my-3 d-flex justify-content-end">
                <div class="col-md-12">
                    <div class="col-md-12 m-auto cardCroquis p-0">
                    <a href="realisations.php?id=<?php echo $result["_id_realisation"] ?>">
                    <div id="<?php echo $result["_id_realisation"] ?>" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../images/<?php echo $result["src1_realisation"] ?>" alt="<?php echo $result["alt1_realisation"] ?>">
                        </div>
                            <?php if(strlen($result["src2_realisation"]) > 1){
                                echo("<div class=\"carousel-item\">");
                                    echo("<img class=\"d-block w-100\" src=\"../images/".$result["src2_realisation"] ."\" alt=\"". $result["alt2_realisation"]."\">");
                                echo("</div>");
                            } ?>
                            <?php if(strlen($result["src3_realisation"]) > 1){ 
                                echo("<div class=\"carousel-item\">");
                                    echo("<img class=\"d-block w-100\" src=\"../images/".$result["src3_realisation"] ."\" alt=\"". $result["alt3_realisation"]."\">");
                                echo("</div>");
                            } ?>
                            <?php if(strlen($result["src4_realisation"]) > 1){ 
                                echo("<div class=\"carousel-item\">");
                                    echo("<img class=\"d-block w-100\" src=\"../images/".$result["src4_realisation"] ."\" alt=\"". $result["alt4_realisation"]."\">");
                                echo("</div>");
                            } ?>
                            <?php if(strlen($result["src5_realisation"]) > 1){ 
                                echo("<div class=\"carousel-item\">");
                                    echo("<img class=\"d-block w-100\" src=\"../images/".$result["src5_realisation"] ."\" alt=\"". $result["alt5_realisation"]."\">");
                                echo("</div>");
                            } ?>
                            <?php if(strlen($result["src6_realisation"]) > 1){ 
                                echo("<div class=\"carousel-item\">");
                                    echo("<img class=\"d-block w-100\" src=\"../images/".$result["src6_realisation"] ."\" alt=\"". $result["alt6_realisation"]."\">");
                                echo("</div>");
                            } ?>
                        </div>
                        <?php if(strlen($result["src2_realisation"]) > 1){ ?>
                            <a class="carousel-control-prev" href="#<?php echo $result["_id_realisation"] ?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#<?php echo $result["_id_realisation"] ?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        <?php } ?>
                    </a>
                    </div>
                        <form action="site/prestations.php" class="d-flex justify-content-between">
                            <button disabled class="btn btn-realisation m-auto font-weight-bold px-5
                            <?php echo $col_btn ?>"><?php echo $result["titre_realisation"] ?></button>
                        </form>
                        <p class="px-3 px-md-4 overflowPerso greyDarkColor"> <?php echo $result["contenu_realisation"]?></p>
                        <div class="col-10 col-md-8 m-auto\">
                        </div>
                    </div>
                </div>
            </article>
        <?php } ?>
    </section>
    <?php include("footer.php"); ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

