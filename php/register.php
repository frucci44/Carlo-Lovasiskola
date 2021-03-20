<?php include 'menu.php'; ?>
<?php include '../database/mysql.php'; ?>

<div class="container">

<?php

$nev = $_POST['nev'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$jelszo1 = $_POST['jelszo'];
$jelszo2 = $_POST['jelszo2'];

if ($nev && $email && $tel && $jelszo1 && $jelszo2) {
    if ($jelszo1 == $jelszo2) {
        
    }
    else {
    ?>
        <h2>A két jelszó nem egyezik</h2>
        <a href="#" onclick="history.back();">Adatok javítása</a>
    <?php
    }
}
else {
?>
    <h2>Nem töltöttél ki midnen adatot</h2>
    <a href="#" onclick="history.back();">Adatok javítása</a>
<?php
}

?>

</div>