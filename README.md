# Thanks to Back Office Bootstrap 
> [Start Bootstrap - SB Admin 2](https://startbootstrap.com/template-overviews/sb-admin-2/)
and
> [OnePage](https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/) Author : BootstrapMade.com, License : ttps://bootstrapmade.com/license/

___________________
# Pour connecter à la base de donnée :
```
<?php
session_start();

$host = ""; //localhost to run it locally
$user = ""; //Your phpmyadmin login
$password = ""; //Your phpmyadmin password
$bdd = ""; //Your database name

$lien = mysqli_connect($host,$user,$password,$bdd);

mysqli_query($lien,"set names utf8")
?>
```