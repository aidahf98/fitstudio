<?php
function connexion(){
   include_once("mesparamtres.inc.php");

   $conn=mysqli_connect(myhost,myuser,mypwd,mybd);

   if (!$conn) {
      # code...
      die('Echec de connexion .Erreur:'.mysqli_connect_error());
   }

   return $conn;


}
?>

