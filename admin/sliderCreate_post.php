<?php include("../admin/fonctions.php"); ?>
<?php
    $alt_slider = $_POST["alt_slider"];
    $src_slider = $_FILES['src_slider']['name'];
    $myTmpFile1 = $_FILES['src_slider']['tmp_name'];

    if (move_uploaded_file($myTmpFile1, "../images/".$_FILES['src_slider']['name'])) {
        $dossier =$_SERVER['DOCUMENT_ROOT']. '/images/';
        move_uploaded_file($myTmpFile1,$dossier .$_FILES['src_slider']['name']);            
        print "Uploaded successfully!";
    } else {
        print "Upload failed!";
    }
    $sql = "insert into slider (src_slider,alt_slider) 
    values('$src_slider','$alt_slider')";
    $query = mysqli_query($lien,$sql);
    header("location:../admin/slider.php");
?>