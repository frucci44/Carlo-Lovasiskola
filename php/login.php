<?php include 'menu.php'; ?>
       
            <div class="container">
           

                <h1 class="text-center">Bejelentkezés</h1>
                <p class="text-center">Kérem minden részt töltsön ki.</p>
                <hr>
                <form method="POST" action="login2.php">
                   
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
                        <label for="jelszo" class="font-weight-bold">Jelszó:</label>
                                    </div>
                        <div class="col-12 col-md-8">
                        <input type="password" name="jelszo" id="jelszo" required>

                                    </div>
                    </div>
                   

                    <div class="row">
                        <div class="col-12 col-md-4">
                                    </div>
                        <div class="col-12 col-md-8 text-center text-md-left">
                        <p>Nincs még fiókja? <a  class="reg" href ="registration.php">Regisztráljon itt!</a></p>
                            <button class="btn btn-secondary"  style="margin-bottom:20px;" type="submit" >Bejelentkezés</button>
                                    </div>
                    </div>



              
                             
                
            </div>

          
        </form>
    
</body>

</html>