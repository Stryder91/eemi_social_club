<?php include("../admin/fonctions.php"); ?>
<?php
    if (isset($_POST["id_savoirfaire"])){
        echo $savoirfaire = change($_POST["savoirfaire"]);
        echo $id_savoirfaire = $_POST["id_savoirfaire"];
        echo $type_savoirfaire = strtolower($_POST["savoirfaire"]);
        header("location:../admin/savoirFaire.php");
        $sql = "update savoir_faire set 
                libelle_savoirfaire='$savoirfaire', 
                type_savoirfaire='$type_savoirfaire' 
                where _id_savoirfaire='$id_savoirfaire'";
    
        $query = mysqli_query($lien,$sql);
    }else {
        echo("PROBLEME ID!");
    }
?>