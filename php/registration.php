<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/menu.css">
    <link rel="stylesheet" href="../css/registration.css">
    <title>Carlo regisztráció</title>
</head>

<body>
    <div>
        <?php include "menu.php"; ?>
    </div>
    <div>
        <form action="action_page.php">
            <div class="container">

                <h1>Regisztráció</h1>
                <p>Kérem minden részt töltsön ki.</p>
                <hr>

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

            <div class="container">
                <p>Van már kész accountja? <a href="#">Bejelentkezek</a>.</p>
            </div>
        </form>
    </div>
</body>

</html>