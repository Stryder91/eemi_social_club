<?php include("../admin/fonctions.php"); ?>
<?php
    echo $titre_sf = change($_POST["titre_sf"]);
    echo $sous_titre_sf = change($_POST["sous_titre_sf"]);
    echo $contenu_sf = change($_POST["contenu_sf"]);

    $sql = "update sf_presentation set 
            titre_sf='$titre_sf', 
            sous_titre_sf='$sous_titre_sf', 
            contenu_sf='$contenu_sf' 
            where _id_sf='1'";
    $query = mysqli_query($lien,$sql);

    header("location:../admin/savoirFaire.php");

?>