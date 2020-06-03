<?php include("../admin/fonctions.php"); ?>
<?php

    echo $description_victor = change($_POST["description_victor"]);
    echo $description_entreprise = change($_POST["description_entreprise"]);
    echo $nombre_confiance = change($_POST["nombre_confiance"]);
    echo $description_confiance = change($_POST["description_confiance"]);
    echo $myImage = $_FILES['img_entreprise']['name'];


    if (move_uploaded_file($_FILES["img_entreprise"]["tmp_name"], "../images/".$_FILES["img_entreprise"]["name"])) {
        $dossier =$_SERVER['DOCUMENT_ROOT']. '/images/';
        move_uploaded_file($_FILES["img_entreprise"]["tmp_name"],$dossier .$_FILES["img_entreprise"]["name"]);            
        print "Uploaded successfully!";
    }

    $sql = "update entreprise set 
    description_victor='$description_victor', 
    description_entreprise='$description_entreprise',
    nombre_confiance='$nombre_confiance',
    description_confiance='$description_confiance',
    img_entreprise='$myImage'  
    where _id_entreprise='1'";
    
    $query = mysqli_query($lien,$sql);
    header("location:../admin/savoirFaire.php");
?>