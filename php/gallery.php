
<?php include 'menu.php'; ?>
<script src="<?= $mappa ?? ''?>../slideshow.js"></script>

<div class="container">

<!DOCTYPE html>
<html>

<head>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="img">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<h2 class="w3-center">Képvetítő</h2>

<div class="w3-content w3-section" style="max-width:500px">
  <img class="mySlides" src="gallery21.jpg" style="width:100%">
  <img class="mySlides" src="gallery22.jpg" style="width:100%">
  <img class="mySlides" src="gallery23jpg.jpg" style="width:100%">
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>


<form action="upload.php" method="post" enctype="multipart/form-data">
  Kép feltöltés:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php include 'footer.php'; ?>