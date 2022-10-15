<?php
# Konek ke Web Server Lokal
$myHost	= "localhost";  // default
$myUser	= "root";       // username
$myPass	= "";           // password
$myDbs	= "rental_eria";// nama database
$koneksidb = mysqli_connect( $myHost, $myUser, $myPass, $myDbs);
if (! $koneksidb) {
  echo "Failed Connection !";
}
?>