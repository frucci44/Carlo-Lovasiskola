<?php include '../database/mysql.php'; ?>
<?php include 'menu.php'; ?>

<?php
$filenev = $_FILES["fileToUpload"]["tmp_name"];
$eredetifilenev = $_FILES["fileToUpload"]["name"];
$uploadOk = true;
$imageFileType = strtolower(pathinfo($eredetifilenev,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  if ($uploadOk && $_FILES["fileToUpload"]["size"] > 2000000) {
    ?>
      <h1>Túl nagy képet töltöttél fel!Max 2MB!</h1>
    <?php
    $uploadOk = false;
  }
  else{
    
    $check = getimagesize($filenev);
    if($check !== false) {
      $uploadOk = true;
    } else {
      ?>
      <h1>Csak képet lehet feltölteni!</h1>
      <?php
      $uploadOk = false;
    }

  }
}


// Allow certain file formats
if($uploadOk && $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  ?>
    <h1>Csak PNG,JPEG,JPG kiterjesztésű képet tölthetsz fel!</h1>
  <?php
  $uploadOk = false;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == false) {
  ?>
  <h1>Nem sikerült a képfeltöltés!</h1>
  <?php
  // if everything is ok, try to upload file
} else {
  $kep = addslashes(file_get_contents($filenev));
  $sql = "INSERT INTO galeria (kep) VALUES ('$kep')";
  $darabszam = $db->query($sql);
   if ($darabszam == 0) {
    ?>
    <h2>Sikertelen feltöltés! </h2>
    <a href="#" onclick="history.back()"> Újrapróbálkozás! </a>
    <?php

   }
   else {
    ?>
    <h2>Sikeres feltöltés! </h2>
    <a href="#" onclick="history.back()"> Vissza a Galériába!</a>
        <?php

   }
}

?>
<?php include 'footer.php'; ?>