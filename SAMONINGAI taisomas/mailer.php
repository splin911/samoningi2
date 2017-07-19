s
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>


    <h1>Testinam framework</h1>

   <?php
    echo "<h2>Laiskas siunciamas<\h2>";
    
    print_r($_GET);
    $pavadinimas = $_GET['field-1'];   
    $data = $_GET['field-1-2'];
    $organizatoriuEmail = $_GET['field-1-3'];
    $vieta = $_GET['field-2'];
    $tipas = $_GET['field-2-1'];
    $registracija = $_GET['field-5'];
    $aprasymas = $_GET['field-3'];
    
    
    
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
    "<h3>Data</h3> " . $data . "<br>" .  
    "<h3>Email</h3> " . $organizatoriuEmail . "<br>" .
    "<h3>Vieta</h3> " . $vieta . "<br>" .
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
    
 


    
    ?>


</body>
    
    
    
</html>








    
