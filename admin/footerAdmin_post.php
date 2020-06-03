<?php include("../admin/fonctions.php"); ?>
<?php
    echo $nom_footer = $_POST["nom_footer"];
    echo $adresse_footer = $_POST["adresse_footer"];
    echo $code_ville_footer = $_POST["code_ville_footer"];
    echo $telephone_footer = $_POST["telephone_footer"];
    echo $mail_footer = $_POST["mail_footer"];
    echo $capital_footer = $_POST["capital_footer"];
    echo $siret_footer = $_POST["siret_footer"];

    $sql = "update footer set nom_footer='$nom_footer', adresse_footer='$adresse_footer', code_ville_footer='$code_ville_footer', 
    telephone_footer='$telephone_footer' , mail_footer='$mail_footer', capital_footer='$capital_footer', siret_footer='$siret_footer'";
    $query = mysqli_query($lien,$sql);

    header("location:../admin/footerAdmin.php");

?>