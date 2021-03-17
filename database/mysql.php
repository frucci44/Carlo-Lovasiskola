<?php 
$szerver="localhost";
$felhasznalo= "root";
$jelszo= "";
$adatbazis= "lovarda";

$db = new  mysqli($szerver , $felhasznalo , $jelszo , $adatbazis);

if(mysqli_connect_errno()) {
echo("Nem sikerült kapcsolódni az adatbázishoz!");
exit;

}




?>
