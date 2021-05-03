<?php include '../database/mysql.php'; ?>
<?php include 'menu.php'; ?>
<link rel="stylesheet" href="../css/gallery.css">
<?php 
$sql="SELECT kep FROM galeria WHERE kategoriaID is null";
$kepek = $db->query($sql);
$darabszam = $kepek->num_rows;
?>

<div class="container col-12  col-md-8">
  <?php
    $sorszam = 1;
  while($kep=$kepek->fetch_assoc()){
    ?>
      <div class="mySlides text-center">
      <div class="numbertext"><?=$sorszam ?> / <?=$darabszam ?></div>
        <img src="data:image;base64,<?=base64_encode($kep["kep"])?>" style="height:500px; max-width:100%">
    </div>
    <?php
    $sorszam++;
   }
  ?>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Thumbnail images -->
  <div class="row">
  <?php
    $sorszam = 1;
$kepek = $db->query($sql);
  while($kep=$kepek->fetch_assoc()){
    ?>
    <div class="">
    <img class="demo cursor" src="data:image;base64,<?=base64_encode($kep["kep"])?>" style="height:80px" onclick="currentSlide(<?=$sorszam ?>)">
  </div>
      <?php
    $sorszam++;
  }
  ?>
  </div>
</div>
<script src="../js/slideshow.js"></script>

<?php 
if (benvanejelentkezve()) {



?>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Kép feltöltés:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Kép Feltöltése" name="submit">
</form>

<?php } 
else {
  ?>
 <p> Ha szeretnél a galériába képet feltölteni, akkor kérlek <a href="login.php" class="reg">Jelentkezz be! </a></p>
<?php

}
?>

<?php include 'footer.php'; ?>
