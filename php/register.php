<?php include 'menu.php'; ?>
<?php include '../database/mysql.php'; ?>
<?php 

$nev=$_POST['nev'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$jelszo=$_POST['jelszo'];
$jelszou=$_POST['jelszou'];

if ($nev && $email && $tel && $jelszo && $jelszou) {

if ($jelszo == $jelszou) {
    $jelszo_hash = md5($jelszo);
    $sql="INSERT INTO felhasznalo (email, jelszo, aktiv, nev, telefonszam) values ('$email', '$jelszo_hash', 1, '$nev', '$tel')";

   $darabszam = $db->query($sql);
   if ($darabszam == 0) {
    ?>
    <h2>Sikertelen Regisztráció! </h2>
    <a href="#" onclick="location.reload()"> Újrapróbálkozás! </a>
    <?php

   }
   else {
    ?>
    <h2>Sikeres Regisztráció! </h2>
    <a href="login.php"> Belépés </a>
    <?php

   }
 
}
else {
?>
<h2>A két jelszó nem egyezik! </h2>
<a href="#" onclick="history.back()"> Adatok javítása </a>
<?php
}
}
else {
?>
<h2>Nem töltöttél ki minden adatot! </h2>
<a href="#" onclick="history.back()"> Adatok javítása </a>

<?php
}

?>


            <div class="container">
            </div>

<?php include 'footer.php'; ?>

           


