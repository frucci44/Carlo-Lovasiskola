<?php include 'menu.php'; ?>
       
            <div class="container">
           

                <h1 class="text-center">Regisztráció</h1>
                <p class="text-center">Kérem minden részt töltsön ki.</p>
                <hr>
                <form method="post" action="register.php">
                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                            <label for="nev" class="font-weight-bold">Teljes név:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="text" name="nev" id="nev" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-4 text-center text-md-left">
                            <label for="email" class="font-weight-bold">E-mail cím:</label>
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
                            <label for="jelszo2" class="font-weight-bold">Jelszó újra:</label>
                        </div>
                        <div class="col-12 col-md-8">
                            <input type="password" name="jelszo2" id="jelszo2" required>
                        </div>
                    </div> 
                    
                    <div class="row">
                        <div class="col-12 col-md-4">
                        </div>
                        <div class="col-12 col-md-8">
                            <p>Fiók létrehozásával Ön elfogadja a következőket: <a href="#">Feltételek és adatvédelem</a>.</p>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-10">
                        </div>
                        <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-secondary">Regisztrálok</button>
                        </div>
                    </div>


               
                
            </div>

          
        </form>
    
</body>

</html>