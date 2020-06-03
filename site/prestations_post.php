<?php
    include("../admin/fonctions.php");

    echo $email = $_POST['email'];
    echo $type = $_POST['type'];
    echo $message = $_POST['message'];

    $date = date("Y/m/d");
    echo $date;
    
    // H:i:s
    $sql = "insert into message (email_message, type_message, contenu_message, date_message) values('$email','$type','$message', '$date')";
    $query = mysqli_query($lien,$sql);

    $to = '';
    $subject = '';
    $messageMail =  $message;

    mail($to, $subject, $messageMail);
    header("location:prestations.php");
?>