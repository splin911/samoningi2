   <?php   

    require_once 'lib/PHPMailerAutoload.php';
    
$mail = new PHPMailer;
//    print_r($_POST);
    $email = $_POST['email']; 
    $vardas = $_POST['vardas'];   
    $number= $_POST['number'];
    $aprasymas = $_POST['aprasymas'];   



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
;

$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = "Nauja uzklausa nuo $vardas";

$mail->Body    =
    "<h3>Vardas</h3> " . $vardas . "<br>" .
    "<h3>Kontaktinis Email</h3> " . $email . "<br>" .
    "<h3>Kontaktinis Nr</h3> " . $number . "<br>" .
    "<h3>Aprasymas</h3> " . nl2br($aprasymas) . "<br>" ; 
   


if(!$mail->send()) {
    echo 'Žinutės išsiųsti nepavyko. Susisiekite: pusepuslapio@gmail.com';
   
} else {
    echo 'Ačiū, susisieksime!';
    
}
    
 


    
    ?>









    
