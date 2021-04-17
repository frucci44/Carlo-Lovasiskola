<?php include '../database/mysql.php'; ?>
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../Mailer/Exception.php';
require '../Mailer/PHPMailer.php';
require '../Mailer//SMTP.php';
?>
<?php include 'menu.php'; ?>

<div class="container">
<?php
$email=$_SESSION['email'];
 $sql="SELECT * FROM felhasznalo where email= '$email'"; 

 $felhasznalo = $db->query($sql);

      $felhasznalo_adat = $felhasznalo->fetch_assoc();
    

$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.nikiati.hu';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'medve@nikiati.hu';                     //SMTP username
    $mail->Password   = 'dO-1V=ZfO=$A';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom('medve@nikiati.hu', 'Mailer');
    $mail->addAddress('sallaifruzsina44@gmail.com', 'Fruzsi');     //Add a recipient
                
   
   
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Új tanuló adatai';
    $kor=$_POST['kor'];
    $ev=$_POST['ev'];
    $tudas=$_POST['tudas'];
    $magam=$_POST['magam'];

    $nev=$felhasznalo_adat["nev"];
    $email=$felhasznalo_adat["email"];
    $tel=$felhasznalo_adat["telefonszam"];




    $mail->Body    = "Szia Szilvi <br><br> A következő tanuló szeretne jönni lovagolni: <br><br>Neve: $nev <br> E-mail címe: $email <br> Telefonszáma: $tel <br> Életkora:  $kor <br> Ennyi ideje lovagol: $ev <br> Tudásszintje: $tudas <br> Leírás róla:$magam <br><br><br> Üdv, a Weboldalad! :)";
    $mail->AltBody = $mail->Body   ;
    $mail->CharSet = 'UTF-8';
    $mail->send();
    
    ?>
    <h1>Értesítettük az oktatót az ön tudásáról!</h1>
    <?php
} catch (Exception $e) {
    ?>
    <h1>Nem sikerült elküldeni az adatokat!</h1>
    <?php
      
}


?>
</div>



<?php include 'footer.php'; ?>