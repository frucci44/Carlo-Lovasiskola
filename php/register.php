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

           


