<?php include '../database/mysql.php'; ?>
<?php include 'menu.php'; ?>
<div class="container">
<?php
  $datum=$_POST['datum'];
  $ido=$_POST['idopont'];

  if ($datum && $ido) {
    $datumido=$datum." ".$ido;
    $idopont =new DateTime($datumido) ;
    if ($idopont< new DateTime()) {
      ?>
      <h1>Az időpont nem lehet a múltban!</h1>
      <?php
    }
   else {
      $sqlido="SELECT foglalas_kezdete, foglalas_vege, ora_hossza from rendszer_beallitasok" ; 

      $ido_lekerdezes = $db->query($sqlido);
      $ido_adat = $ido_lekerdezes ->fetch_assoc();
      $kezdete=$ido_adat["foglalas_kezdete"];
      $vege=$ido_adat["foglalas_vege"];
      $hossz=$ido_adat["ora_hossza"];

      $megfelelo_kezdete = strtotime($kezdete.":00");
      $megfelelo_vege = strtotime($vege.":00");
      $megadott_ido = strtotime("".$ido);

      if ($megadott_ido < $megfelelo_kezdete )
      {
            ?>
            <h1>Nem jó időpontot választott!a</h1>
            <?php
      }
      elseif ($megadott_ido > $megfelelo_vege){
            ?>
            <h1>Nem jó időpontot választott!b</h1>
          <?php
      }
      else {
        $email=$_SESSION['email'];

        $sql="SELECT * FROM felhasznalo where email= '$email' ";
        $felhasznalo = $db->query($sql);
        $felhasznalo_adat = $felhasznalo->fetch_assoc();
        $felhasznalo_id=$felhasznalo_adat["id"];
        $oktato_id=$felhasznalo_adat["oktato_id"];
        $ora_Vege = $idopont->add(new DateInterval("PT{$hossz}M"));
        $ora_Vegeszoveg = $ora_Vege->format("Y-m-d H:i");
          $foglalte="SELECT * FROM foglalas WHERE (kezdete > '$datumido' OR vege > '$datumido')AND (kezdete < '$ora_Vegeszoveg' OR vege < '$ora_Vegeszoveg')AND oktato_id =  $oktato_id";
          
          $foglaltdarabszam = $db->query($foglalte);
        if ($foglaltdarabszam->num_rows > 0) {
          ?>

          <h1>Ez az időpont már foglalt!</h1>
          <?php
        }
        else {
         
                  

        
          $foglalas="INSERT INTO foglalas (kezdete , vege , oktato_id , felhasznalo_id) values ('$datumido' , '$ora_Vegeszoveg' , '$oktato_id' , '$felhasznalo_id')";
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
     }
  }
  else {
    ?>
    <h2>Kérem adja meg az időpontot </h2>
    <?php
   }
?>
</div>
<?php include 'footer.php'; ?> 

