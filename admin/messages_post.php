<?php include("../admin/fonctions.php"); ?>
<?php
    if (isset($_POST["id_message"])){
        echo $id_message = $_POST["id_message"];
    }

    $sql = "delete from message where _id_message ='".$id_message."'";
    $query = mysqli_query($lien,$sql);

    header("location:../admin/messages.php");

?>