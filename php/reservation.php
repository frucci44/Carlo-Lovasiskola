<?php include '../database/mysql.php'; ?>
<?php include 'menu.php'; ?>
<div class="container">
<?php
$datum=$_POST['datum'];
$ido=$_POST['idopont'];

if ( $datum && $ido) {
 $idopont =new DateTime($datum." ".$ido) ;
 if ($idopont< new DateTime()) {

    ?>
    <h1>Az időpont nem lehet a múltban!</h1>
    <?php
 }
 else {
     $sqlido="SELECT foglalas_kezdete , foglalas_vege , ora_hossza from  rendszer_beallitasok "; 

    $ido = $db->query($sqlido);
            $ido_adat = $ido->fetch_assoc();
            $kezdete=$ido_adat["foglalas_kezdete"];
            $vege=$ido_adat["foglalas_vege"];
            $hossz=$ido_adat["ora_hossza"];

            $megfelelo_kezdete = strtotime($kezdete.":00");

            
            $megfelelo_vege = strtotime($vege.":00");
            $megadott_ido = strtotime("".$ido);

            if ($megadott_ido < $megfelelo_kezdete )
          
        {
            ?>
            <h1>Nem jó időpontot választott!</h1>
            <?php


        }

elseif ($megadott_ido > $megfelelo_vege){
    ?>
    <h1>Nem jó időpontot választott!</h1>
    <?php

}
else {
   
}
    }

}



else {
  if (false) {
    ?>
    <h1>Ez az időpont már foglalt!</h1>
    <?php
  }
  else {
    $foglalas="INSERT INTO foglalas (kezdete , vege , oktato_id , felhasznalo_id) values ('$email', '$jelszo_hash', 1, '$nev', '$tel')";

    $darabszam = $db->query($foglalas);
    if ($darabszam == 0) {
     ?>
     <h2>Sikertelen időpontfoglalás! </h2>
     <a href="#" onclick="location.reload()"> Újrapróbálkozás! </a>
     <?php
 
    }
    else {
     ?>
     <h2>Sikeres Időpontfoglalás! </h2>
     
     <?php
 
    }
  }
}




?>
</div>
<?php include 'footer.php'; ?> 

