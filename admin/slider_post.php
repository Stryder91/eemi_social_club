<?php include("../admin/fonctions.php"); ?>
<?php
    if (isset($_POST["id_slider"])){
        echo $id_slider = $_POST["id_slider"];
        echo $alt_slider = change($_POST["alt_slider"]);
        echo $src_slider = $_FILES['src_slider']['name'];
        echo $_FILES['src_slider']['tmp_name'];

        if (move_uploaded_file($_FILES["src_slider"]["tmp_name"], "../images/".$_FILES['src_slider']['name'])) {
            $dossier =$_SERVER['DOCUMENT_ROOT']. '/images/';
            move_uploaded_file($_FILES['src_slider']['tmp_name'],$dossier .$_FILES['src_slider']['name']);            
            print "Uploaded successfully!";
            $sql = "update slider set 
            src_slider='$src_slider', 
            alt_slider='$alt_slider' 
            where _id_slider='$id_slider'";
            $query = mysqli_query($lien,$sql);
            header("location:../admin/slider.php");
        } else {
            print "Upload failed!";
        }
        //header("location:../admin/realisationAdmin.php");
    } 
    else {
        echo("PROBLEME ID!");
    }

?>