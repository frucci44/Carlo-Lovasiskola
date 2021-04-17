<?php include 'menu.php'; ?>
<?php include '../database/mysql.php'; ?>
<?php
$email=$_POST['email'];
$jelszo=$_POST['jelszo'];


if (  $email && $jelszo ) {
    $jelszo_hash = md5($jelszo);
    $sql="SELECT * FROM felhasznalo where aktiv and jelszo = '$jelszo_hash' and email = '$email' ";

   $felhasznalo = $db->query($sql);
    if ($felhasznalo->num_rows != 0) {
        $felhasznalo_adat = $felhasznalo->fetch_assoc();

     
     $_SESSION["nev"] = $felhasznalo_adat["nev"];
     $_SESSION["email"] = $felhasznalo_adat["email"];
     $_SESSION["vanoktato"] = $felhasznalo_adat["oktato_id"]!= null ;

     ?>
     <h2>Sikeres Bejelentkezés</h2>
     <a href="../index.php" > Főoldal</a>
     <?php
     
         
    }
    else {
    ?>
    <h2>E-mail cím, vagy a jelszó hibás!</h2>
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