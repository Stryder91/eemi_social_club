<?php include("../admin/fonctions.php"); ?>
<?php
    $titre_real = "";
    $contenu_real = "Description à venir ...";
    $type_real = "";

    $titre_real = $_POST["titre_real"];
    $contenu_real = $_POST["contenu_real"];
    $type_real = $_POST["type_real"];
    
    $myImageSrc0 = $_FILES['src0_real']['name'];
    $myImageAlt0 = $_POST["alt0_real"];

    $myImageSrc1 = $_FILES['src1_real']['name'];
    $myImageAlt1 = $_POST["alt1_real"];

    $myImageSrc2 = $_FILES['src2_real']['name'];
    $myImageAlt2 = $_POST["alt2_real"];

    $myImageSrc3 = $_FILES['src3_real']['name'];
    $myImageAlt3 = $_POST["alt3_real"];

    $myImageSrc4 = $_FILES['src4_real']['name'];
    $myImageAlt4 = $_POST["alt4_real"];

    $myImageSrc5 = $_FILES['src5_real']['name'];
    $myImageAlt5 = $_POST["alt5_real"];

    //Pour upload images
    for($i = 0; $i <= 5; $i++) {
    $myImageSrc{$i} = $_FILES["src{$i}_real"]["name"];
    $myImageAlt{$i} = $_POST["alt{$i}_real"];
    echo $myImageSrc{$i};
    echo("<br/>");

      if (move_uploaded_file($_FILES["src{$i}_real"]["tmp_name"], "../images/".$_FILES["src{$i}_real"]["name"])) {
        $dossier =$_SERVER['DOCUMENT_ROOT']. '/images/';
        move_uploaded_file($_FILES["src{$i}_real"]["tmp_name"],$dossier .$_FILES["src{$i}_real"]["name"]);            
        print "Uploaded successfully!";
      } else {
        print "Upload failed!";
      }
    }

    //SQL
      $sql = "insert into realisation (titre_realisation,contenu_realisation,
        type_realisation, 
        src1_realisation, 
        alt1_realisation,

        src2_realisation, 
        alt2_realisation,
  
        src3_realisation, 
        alt3_realisation,
  
        src4_realisation, 
        alt4_realisation,
  
        src5_realisation, 
        alt5_realisation,
  
        src6_realisation, 
        alt6_realisation
      ) 
      values('$titre_real','$contenu_real','$type_real',
        '$myImageSrc0', '$myImageAlt0',
        '$myImageSrc1', '$myImageAlt1',
        '$myImageSrc2', '$myImageAlt2',
        '$myImageSrc3', '$myImageAlt3',
        '$myImageSrc4', '$myImageAlt4',
        '$myImageSrc5', '$myImageAlt5'
      )";
      $query = mysqli_query($lien,$sql);
      header("location:../admin/realisationAdmin.php");
    // correctImageOrientation($destinationFilename);
    function correctImageOrientation($filename) {
        if (function_exists('exif_read_data')) {
          $exif = exif_read_data($filename);
          if($exif && isset($exif['Orientation'])) {
            $orientation = $exif['Orientation'];
            if($orientation != 1){
              $img = imagecreatefromjpeg($filename);
              $deg = 0;
              switch ($orientation) {
                case 3:
                  $deg = 180;
                  break;
                case 6:
                  $deg = 270;
                  break;
                case 8:
                  $deg = 90;
                  break;
              }
              if ($deg) {
                $img = imagerotate($img, $deg, 0);        
              }
              // then rewrite the rotated image back to the disk as $filename 
              imagejpeg($img, $filename, 95);
            } // if there is some rotation necessary
          } // if have the exif orientation info
        } // if function exists      
      }
      // src2_realisation, 
      //         alt2_realisation,
        
      //         src3_realisation, 
      //         alt3_realisation,
        
      //         src4_realisation, 
      //         alt4_realisation,
        
      //         src5_realisation, 
      //         alt5_realisation,
        
      //         src6_realisation, 
      //         alt6_realisation,
      // '$src_real', '$type_real', '$alt_real',
      // '$src_real', '$type_real', '$alt_real',
      // '$src_real', '$type_real', '$alt_real',
      // '$src_real', '$type_real', '$alt_real',
      // '$src_real', '$type_real', '$alt_real'
        
?>
