<?php include 'menu.php'; ?>
       
            <div class="container">
           

                <h1 class="text-center">Regisztráció</h1>
                <p class="text-center">Kérem minden részt töltsön ki.</p>
                <hr>
                <form method="POST" action="register.php">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                            <label for="nev" class="font-weight-bold">Teljes név :</label>
                                    </div>
                        <div class="col-12 col-md-8">
                            <input type="text" name="nev" id="nev" required>


                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="email" class="font-weight-bold">E-mail:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="email" name="email" id="email" required>


                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="tel" class="font-weight-bold">Telefonszám:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="tel" name="tel" id="tel" required>


                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="jelszo" class="font-weight-bold">Jelszó:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="password" name="jelszo" id="jelszo" required>

                                    </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                        <label for="jelszou" class="font-weight-bold">Jelszó újra:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="password" name="jelszou" id="jelszou" required>


                                    </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8">
                        <p>Fiók létrehozásával Ön elfogadja a következőket: <a href="#">Feltételek és adatvédelem</a>.</p>
                            <button type="submit" >Regisztráció</button>

                                    </div>
                    </div>



              
                             
                
            </div>

          
        </form>
    
</body>

</html>