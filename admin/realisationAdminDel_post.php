
<?php include("../admin/fonctions.php"); ?>
<?php
    if (isset($_POST["id_real"])){
        echo $id_real = $_POST["id_real"];
    
        $sql = "delete from realisation where _id_realisation='".$_POST["id_real"]."'";
    
        $query = mysqli_query($lien,$sql);

        header("location:../admin/realisationAdmin.php");
    } 
    else {
        echo("PROBLEME ID!");
    }

?>