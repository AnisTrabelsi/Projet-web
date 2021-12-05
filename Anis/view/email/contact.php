<?php 
  use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail=new PHPMailer(true);
$alert='';

    if(isset( $_POST['submit']) ){
        $surname = $_POST['surname'];
        $firstname = $_POST['firstname'];
        $email =$_POST['email'];
        $message = $_POST['message'];

try{

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='ecolife839@gmail.com';
$mail->Password='sel3ab7ar';
$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port='587';

$mail->setFrom('ecolife839@gmail.com');
$mail->addAddress($_POST['email']);

$mail->isHTML(true);
$mail->Subject='message recu subject';
$mail->Body="<h3>Name : $surname <br> </h3> <h3>Namepr : $firstname<br> </h3>";

$mail->send();
$alert='alert';
}catch(Exception $e) {
    $alert='alert'.$e->getMessage();


}




    }

  ?>
