
<?php include 'menu.php'; ?>
<link rel="stylesheet" href="../css/gallery.css">



<div class="container , col-12  col-md-8">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="../img/gallery2.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="../img/gallery21.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="../img/gallery22.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="../img/gallery23jpg.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="../img/gallery24.jpg" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="../img/gallery25.jpg" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="../img/gallery2.jpg" style="width:100%" onclick="currentSlide(1)" alt="Lovarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/gallery21.jpg" style="width:100%" onclick="currentSlide(2)" alt="Lovarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/gallery22.jpg" style="width:100%" onclick="currentSlide(3)" alt="Lovarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/gallery23jpg.jpg" style="width:100%" onclick="currentSlide(4)" alt="Lovarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/gallery24.jpg" style="width:100%" onclick="currentSlide(5)" alt="Lovarda">
    </div>
    <div class="column">
      <img class="demo cursor" src="../img/gallery25.jpg" style="width:100%" onclick="currentSlide(6)" alt="Lovarda">
    </div>
  </div>
</div>

<form action="upload.php" method="post" enctype="multipart/form-data">
  Kép feltöltés:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

<?php include 'footer.php'; ?>
