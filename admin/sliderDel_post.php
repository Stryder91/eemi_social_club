<?php include("../admin/fonctions.php"); ?>
<?php
    if (isset($_POST["id_slider"])){    
        $sql = "delete from slider where _id_slider='".$_POST["id_slider"]."'";
        $query = mysqli_query($lien,$sql);

        header("location:../admin/slider.php");
    } 
    else {
        echo("PROBLEME ID!");
    }

?>