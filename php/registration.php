<?php include 'menu.php'; ?>
       
            <div class="container">
           

                <h1 class="text-center">Regisztráció</h1>
                <p class="text-center">Kérem minden részt töltsön ki.</p>
                <hr>
                <form action="action_page.php">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                            <label for="nev" class="font-weight-bold">Teljes név :</label>
                                    </div>
                        <div class="col-12 col-md-8">
                            <input type="text" name="nev" id="nev">


                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">

                                    </div>
                    </div>


                <label for="email"><b>Email:</b></label>
                <input type="text" placeholder="Email megadása" name="email" id="email" required>

                <label for="psw"><b>Jelszó:</b></label>
                <input type="password" placeholder="Jelszó megadása" name="psw" id="psw" required>

                <label for="psw-repeat"><b>Jelszó ismét:</b></label>
                <input type="password" placeholder="Jelszó ismételt megadása" name="psw-repeat" id="psw-repeat" required>
                <hr>

                <p>Fiók létrehozásával Ön elfogadja a következőket: <a href="#">Feltételek és adatvédelem</a>.</p>
                <button type="submit" class="registerbtn">REGISZTRÁLOK</button>
            </div>

          
        </form>
    
</body>

</html>