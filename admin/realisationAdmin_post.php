<?php include("../admin/fonctions.php"); ?>
<?php
if (isset($_POST["id_real"])){

    echo("ID : ");
    echo $id_real = $_POST["id_real"];
    $titre_real = "";
    $contenu_real = "Description à venir ...";
    $type_real = "";

    $titre_real = $_POST["titre_realisation"];
    
    $contenu_real = $_POST["contenu_realisation"];
    
    $type_real = $_POST["type_realisation"];
    
    $myImageAlt1 = $_POST["alt1_realisation"];
    $myImageAlt2 = $_POST["alt2_realisation"];
    $myImageAlt3 = $_POST["alt3_realisation"];
    $myImageAlt4 = $_POST["alt4_realisation"];
    $myImageAlt5 = $_POST["alt5_realisation"];
    $myImageAlt6 = $_POST["alt6_realisation"];


    //Pour upload images
    for($i = 1; $i <= 6; $i++) {
      $myImageSrc{$i} = $_FILES["src{$i}_realisation"]["name"];
      $myImageAlt{$i} = $_POST["alt{$i}_realisation"];
      echo("<br/> MyImageSrc par la boucle ");
      echo ("{$i}");
      echo(" : ");
      echo $myImageSrc{$i};
      if (move_uploaded_file($_FILES["src{$i}_realisation"]["tmp_name"], "../images/".$_FILES["src{$i}_realisation"]["name"])) {
        $dossier = $_SERVER['DOCUMENT_ROOT']. '/images/';
        move_uploaded_file($_FILES["src{$i}_realisation"]["tmp_name"],$dossier .$_FILES["src{$i}_realisation"]["name"]);            
        
      } else {
        
      }
    }

    if (strlen($_FILES['src1_realisation']['name']) > 1){
      echo("<br/> MyReal 1 :");
      echo $myImageSrc1 = $_FILES['src1_realisation']['name'];
    } else {
      echo("<br/> Image 1 :");
      echo $myImageSrc1 = $_POST["src1_realisation"];
    }

    // 4 
    if (strlen($_FILES['src2_realisation']['name']) > 1){
      echo("<br/> MyReal 2 :");
      echo $myImageSrc2 = $_FILES['src2_realisation']['name'];
    } else {
      echo("<br/> Image 2 :");
      echo $myImageSrc2 = $_POST["src2_realisation"];
    }

    // 3
    if (strlen($_FILES['src3_realisation']['name']) > 1){
      echo("<br/> MyReal 3 :");
      echo $myImageSrc3 = $_FILES['src3_realisation']['name'];
    } else {
      echo("<br/> Image 3 :");
      echo $myImageSrc3 = $_POST["src3_realisation"];
    }

    //4
    if (strlen($_FILES['src4_realisation']['name']) > 1){
      echo("<br/> MyReal 4 :");
      echo $myImageSrc4 = $_FILES['src4_realisation']['name'];
    } else {
      echo("<br/> Image 4 :");
      echo $myImageSrc4 = $_POST["src4_realisation"];
    }

    //5
    if (strlen($_FILES['src5_realisation']['name']) > 1){
      echo("<br/> MyReal 5 :");
      echo $myImageSrc5 = $_FILES['src5_realisation']['name'];
    } else {
      echo("<br/> Image 5 :");
      echo $myImageSrc5 = $_POST["src5_realisation"];
    }

    //6
    if (strlen($_FILES['src6_realisation']['name']) > 1){
      echo("<br/> MyReal 6 :");
      echo $myImageSrc6 = $_FILES['src6_realisation']['name'];
    } else {
      echo("<br/> Image 6 :");
      echo $myImageSrc6 = $_POST["src6_realisation"];
    }

    // echo("<br/> MyReal 3 :");
    // echo $mySql2 = $_POST["src2_realisation"];
    // echo("<br/> Image 2 :");
    // echo $myImageSrc1 = $_FILES['src2_realisation']['name'];
    // $myImageAlt1 = $_POST["alt2_realisation"];

    // echo("<br/> MyReal 3 :");
    // echo $mySql3 = $_POST["src3_realisation"];
    // echo("<br/> Image 3 :");
    // echo $myImageSrc2 = $_FILES['src3_realisation']['name'];
    // $myImageAlt2 = $_POST["alt3_realisation"];

    // echo("<br/> MyReal 4 :");
    // echo $mySql4 = $_POST["src4_realisation"];
    // echo("<br/> Image 4 :");
    // echo $myImageSrc3 = $_FILES['src4_realisation']['name'];
    // $myImageAlt3 = $_POST["alt4_realisation"];

    // echo("<br/> MyReal 5 :");
    // echo $mySql5 = $_POST["src5_realisation"];
    // echo("<br/> Image 5 :");
    // echo $myImageSrc4 = $_FILES['src5_realisation']['name'];
    // $myImageAlt4 = $_POST["alt5_realisation"];

    // echo("<br/> MyReal 6 :");
    // echo $mySql6 = $_POST["src6_realisation"];
    // echo("<br/> Image 6 :");
    // echo $myImageSrc5 = $_FILES['src6_realisation']['name'];
    // $myImageAlt5 = $_POST["alt6_realisation"];

    
//SQL
    $sql = "update realisation set 
    titre_realisation  = '$titre_real',
    contenu_realisation= '$contenu_real',
    type_realisation   = '$type_real', 
    src1_realisation = '$myImageSrc1', 
    alt1_realisation = '$myImageAlt1',

    src2_realisation = '$myImageSrc2', 
    alt2_realisation = '$myImageAlt2',

    src3_realisation = '$myImageSrc3',
    alt3_realisation = '$myImageAlt3',

    src4_realisation = '$myImageSrc4',
    alt4_realisation = '$myImageAlt4',

    src5_realisation = '$myImageSrc5',
    alt5_realisation = '$myImageAlt5',

    src6_realisation = '$myImageSrc6',
    alt6_realisation = '$myImageAlt6'
    where _id_realisation='$id_real' ";
    $query = mysqli_query($lien,$sql);
    header("location:../admin/realisationAdmin.php");
}
?>
