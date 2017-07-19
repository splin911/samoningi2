<?php
    
      define('HOST', 'localhost');
      define('DB_USERNAME', 'ppdizain');
      define('DB_PASSWORD', 'ppDIZAIN123keule');
      define('DB_NAME', 'samoningai');

      function connect_DB () {
        $connection = mysqli_connect( HOST, DB_USERNAME, DB_PASSWORD,DB_NAME);
        if ( $connection) {
          echo "Prisijungti pavyko <br />";
        } else {
          echo "NEPAVYKO prisijungti!!! " . mysqli_connect_error()  . " <br />";
        }
        return $connection;
      }

      // connect_DB();


/////----------------- mailer

    echo "<h2>Laiskas siunciamas<\h2>";
    
    print_r($_GET);
    $pavadinimas = $_GET["pavadinimas"];
    $data_ = $_GET["data_"];
    $email = $_GET["email"];
    $miestas = $_GET["miestas"];
    $tipas = $_GET["tipas"];
    $registracija = $_GET["registracija"];
    $aprasymas = $_GET["aprasymas"];
    $tinkamas_rodyti = $_GET["tinkamas_rodyti"];

    
    
    require_once 'lib/lib/PHPMailerAutoload.php';
    
    
    $mail = new PHPMailer;

$mail->SMTPDebug = 0;                               // Enable verbose debug output. Geriausia išsijungti

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'samoningai@gmail.com';                 // SMTP username
$mail->Password = 'jogavasista123';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('samoningai@gmail.com', 'samoningai');
$mail->addAddress('samoningai@gmail.com', 'samoningai');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
//$mail->addReplyTo($klientoElpastas, $klientoVardas); ///cia i kuri maila nueis pastas jei gavejas nuspres atrasyti
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Naujas renginys . $pavadinimas";
//$mail->Body    = 'Veikia html!!<b>in bold!</b>'; senasis
$mail->Body    =
    "<h3> Pavadinimas </h3>" . $pavadinimas . "<br>" . 
    "<h3>Data</h3> " . $data_ . "<br>" .  
    "<h3>Email</h3> " . $email . "<br>" .
    "<h3>Vieta</h3> " . $miestas . "<br>" .
    "<h3>Tipas</h3> " . $tipas . "<br>" .
    "<h3>Ar butina registracija? y - butina, jei nieko - nebutina </h3>  " . $registracija . "<br>" .
    "<h3>Aprasymas</h3> " . nl2br($aprasymas) . "<br>" ; 
   
    
//$mail->AltBody = 'Nu cia jei jau nieks neveiks.../n : kiek kainuoja ... ???'; //senasis
$mail->AltBody = 'Nu cia jei jau nieks neveiks.../n : kiek kainuoja ... ???';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
    
 
/////----------------- mailer



      function kurtiSkelbima($pavadinimas, $data_, $email, $miestas, $tipas, $registracija, $aprasymas, $tinkamas_rodyti) {
          $sql = "INSERT INTO skelbimai (pavadinimas, data_, email, miestas, tipas, registracija, aprasymas,
tinkamas_rodyti, nuoroda, telnr, laisvas1, laisvas2) VALUES ('$pavadinimas', '$data_', '$email', '$miestas', '$tipas', '$registracija', '$aprasymas',
'$tinkamas_rodyti', '$nuoroda', '$telnr', '$laisvas1', '$laisvas2' )";
          $connect = connect_DB();
          $status = mysqli_query($connect, $sql);
          if(!$status) {
            echo "Skelbimo ideti nepavyko:" . mysqli_error($connect) . " <br>"; 
         } else {
              header("Location: redirect.php");
              die();         
   } }

kurtiSkelbima($pavadinimas, $data_, $email, $miestas, $tipas, $registracija, $aprasymas, $tinkamas_rodyti);
    
    ?>