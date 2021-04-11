
<?php
session_start();
function benvanejelentkezve() { 
  return (isset ($_SESSION['nev']));
}
?>

<?php include "_head.php" ?>
<script>
  $(function(){
    $(window).scroll(function() {
      var scr = window.scrollY;
      if (scr < 50) scr = 0;
      $("html").attr("data-scroll", scr);
    });
  })
</script>

<nav class="navbar navbar-expand-lg">

  <a class="navbar-brand" href="<?=$mappa ?? '' ?>../index.php">
    <img class="logo" src="<?=$mappa ?? '' ?>../img/logo/logo_atlatszo.png" />
    <?php 
    if (benvanejelentkezve() ) {
      ?>
<span  class="nagyobb">Szia <?=$_SESSION['nev'] ?>!</span> 
    <?php

    }
    ?>

  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon fa fa-bars"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?=$mappa ?? '' ?>../index.php">Főoldal</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$mappa ?? '' ?>introduction.php">Bemutatkozás</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$mappa ?? '' ?>gallery.php">Galéria</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$mappa ?? '' ?>services.php">Szolgáltatásaink</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?=$mappa ?? '' ?>map.php">Térkép</a>
      </li>
      <li class="nav-item">
      <?php
      if (isset ($_SESSION['nev'] )) {
        ?>
<a class="nav-link" href="<?=$mappa ?? '' ?>logout.php">Kijelentkezés</a>
      <?php

      }
      else {
        ?>
 <a class="nav-link" href="<?=$mappa ?? '' ?>login.php">Bejelentkezés</a>
      <?php

      }
      
      ?>
       
      </li>
    </ul>
  </div>
</nav>
<div class="head-padding"></div>
<header>
  <div class="backg"></div>
  <h1 class="glow">Egy Ló Egy Élet Egy Szerelem</h1>
</header>
</div>
</header>