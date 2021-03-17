
<?php include 'menu.php'; ?>
<?php include '../database/mysql.php'; ?>
<?php


$sql="SELECT o.nev, o.bemutatkozas, o.kep , l.id FROM oktato o LEFT JOIN lo l ON o.id = l.oktato_id WHERE l.id is null";

$oktatok = $db->query($sql);
$lovak = $db->query($sql);

?>





<div class="container">

<?php
if($oktatok->num_rows == 0) {
    ?>
    <h1>Sajnos nem dolgozik itt senki. </h1>
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



<?php
    }
}
   ?>

<div class="container">

<?php
if($lovak->num_rows == 0) {
    ?>
    <h1>Jelenleg nincsenek lovaink! </h1>
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



<?php
    }
}
   ?>

   </div>