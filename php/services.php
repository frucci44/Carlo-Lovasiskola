
<?php include '../database/mysql.php'; ?>
<?php include 'menu.php'; ?>


<div class="container">
 
 <?php

  if (benvanejelentkezve()) {
    if($_SESSION['vanoktato']){
        $email=$_SESSION['email'];
 $sql="SELECT f.nev , f.telefonszam , o.nev as oktatonev FROM felhasznalo f JOIN oktato o on o.id = f.oktato_id where  f.email= '$email'"; 
 $sqlido="SELECT foglalas_kezdete , foglalas_vege from  rendszer_beallitasok "; 
 $felhasznalo = $db->query($sql);

      $felhasznalo_adat = $felhasznalo->fetch_assoc();
      $nev=$felhasznalo_adat["nev"];
            $tel=$felhasznalo_adat["telefonszam"];
            $okt=$felhasznalo_adat["oktatonev"];

            $ido = $db->query($sqlido);
            $ido_adat = $ido->fetch_assoc();
            $kezdete=$ido_adat["foglalas_kezdete"];
            $vege=$ido_adat["foglalas_vege"];
            
      ?>
      <h1 class="text-center">Időpontfoglalás</h1>
               
                <hr>
                                <form method="POST" action="reservation.php">
                   
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label  class="font-weight-bold">Név:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <label ><?=$nev ?></label>

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label  class="font-weight-bold">Telefonszám:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <label ><?=$email ?></label>
                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label  class="font-weight-bold">Oktató neve:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <label ><?=$okt ?></label>
                                    </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="idopont" class="font-weight-bold">időpont:</label>
                                    </div>
                        <div class="col-12 col-md-4">
                        <input type="date" name="datum" id="datum"  required min="<?=date("Y-m-d")?>">
                                                            </div>
                                    <div class="col-12 col-md-2">
                
                        <input type="time" name="idopont" id="idopont" required min="<?= str_pad($kezdete , 2 , '0' , STR_PAD_LEFT) ?>:00" max="<?= $vege ?>:00">
                                    </div>
                    </div>
                                

                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8 text-center text-md-left">
                        
                            <button class="btn btn-secondary"  style="margin-bottom:20px;" type="submit" >Foglalás</button>
                                    </div>
                   </div>
                                
                            </div>
        
        </form>
<?php


    }
    else {
?>
<h1 class="text-center">Bemutatkozás</h1>
                <p class="text-center">Kérem minden részt töltsön ki.</p>
                <hr>
                <form method="POST" action="firstemail.php">
                   
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="kor" class="font-weight-bold">Kor:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="number" name="kor" id="kor" required min=0>


                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="ev" class="font-weight-bold">Hány éve lovagolsz?</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="number" name="ev" id="ev" required>

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="tudas" class="font-weight-bold">Tudás szintje:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <select name="tudas" id="tudas" required>
                        <option value="Még nem lovagoltam">Még nem lovagoltam</option>
                        <option value="Kezdő">Kezdő</option>
                        <option value="Középhaladó">Középhaladó</option>
                        <option value="Haladó">Haladó</option>
                        <option value="Profi">Profi</option>
                        </select>                    
                                    </div>
                    </div>
                  
                      <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="magam" class="font-weight-bold">Magamról:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                      <textarea name="magam" id="magam" cols="100" rows="10"></textarea>
                                    </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8 text-center text-md-left">
                    
                            <button class="btn btn-secondary"  style="margin-bottom:20px;" type="submit" >Küldés</button>
                                    </div>
                    </div>
                                  
                            </div>
                 </form>
    <?php

    }

  }

  else {
?>

<h1>Szolgáltatásaink</h1>
<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis unde atque quia corrupti eveniet repellat nemo reprehenderit illum necessitatibus enim dicta sapiente qui facere, vitae nostrum voluptates omnis eius obcaecati.</p>
Ha szeretnél időpontot foglalni akkor <a href="login.php" class="reg">Jelentkezz be! </a>

<?php
  }
  ?>
  </div>

  <?php include 'footer.php'; ?>
  
  