<?php include "_head.php" ?>
<?php include 'menu.php'; ?>

    <div class="container">
        <div class="carousel usztatas">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
</body>
<div class="row">
        <div class="column">
            <img src="../img/gallery2.jpg" alt="ugratas" onclick="myFunction(this);">
        </div>
        <div class="column">
            <img src="../img/gallery21.jpg" alt="ugratas" onclick="myFunction(this);">
        </div>
        <div class="column">
            <img src="../img/gallery22.jpg" alt="ugratas" onclick="myFunction(this);">
        </div>
        <div class="column">
            <img src="../img/gallery23jpg.jpg" alt="ugratas" onclick="myFunction(this);">
        </div>
    </div>

    <!-- The expanding image container -->
    <div class="container">
        <!-- Close the image -->
        <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>

        <!-- Expanded image -->
        <img id="expandedImg" style="width:100%">

        <!-- Image text -->
        <div id="imgtext"></div>
        <form action="../php/upload.php" method="post" enctype="multipart/form-data">

            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Kép feltöltése" name="submit">
        </form>

</div>

</html>