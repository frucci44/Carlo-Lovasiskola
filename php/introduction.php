
<?php include 'menu.php'; ?>
<?php include '../database/mysql.php'; ?>

<?php



$sql_oktato="SELECT o.nev, o.bemutatkozas, o.kep , l.id FROM oktato o LEFT JOIN lo l ON o.id = l.oktato_id WHERE l.id is null";
$sql_lovak="SELECT nev, bemutatkozas, kep  FROM lo WHERE oktato_id is null";
$oktatok = $db->query($sql_oktato);
$lovak = $db->query($sql_lovak);

?>





<div class="container">
<h1>Edzőink</h1>
<?php
if($oktatok->num_rows == 0) {
    ?>
    <h2>Sajnos nem dolgozik itt senki. </h2>
    <?php
} else {
    while ($oktato = $oktatok->fetch_assoc())  {
        ?>
<div class="row">
    <div class="col-12 col-md-3" >
        <img class="bemutatkep" src="data:image;base64,<?=base64_encode($oktato["kep"] )?>" /> 
    </div>
                  
    <div class="col-12 col-md-9" >
             
        <div class="row"> 
            <div class="col-12">
                <h1><?=$oktato["nev"] ?></h1>
            </div>
             <div class="col-12">
                
                 <p><?=$oktato["bemutatkozas"] ?></p>
            </div>
            
            
        </div>
    </div>
</div>
<br>



<?php
    }
}
   ?>

<hr/>
<h1>Lovaink</h1>
<?php
if($lovak->num_rows == 0) {
    ?>
    <h2>Jelenleg nincsenek lovaink! </h2>
    <?php
} else {
    while ($lo = $lovak->fetch_assoc())  {
        ?>
<div class="row">
    <div class="col-12 col-md-3" >
        <img class="bemutatkep" src="data:image;base64,<?=base64_encode($lo["kep"] )?>" /> 
    </div>
                  
    <div class="col-12 col-md-9" >
             
        <div class="row"> 
            <div class="col-12">
                <h1><?=$lo["nev"] ?></h1>
            </div>
             <div class="col-12">
                
                 <p><?=$lo["bemutatkozas"] ?></p>
            </div>
            
            
        </div>
    </div>
</div>
<br>



<?php
    }
}
   ?>

   </div>

   <?php include 'footer.php'; ?>