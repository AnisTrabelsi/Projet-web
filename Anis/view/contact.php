<?php 
  use PHPMailer\PHPMailer\PHPMailer;
require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';


$mail=new PHPMailer(true);
$alert='';

    if(isset( $_POST['submit']) ){
      $CIN=  $_POST['CIN'];
      $Nom=  $_POST['Nom'];
      $Prenom=   $_POST['Prenom'];
      $Email= $_POST['Email'];
      $Num_tel= $_POST['Num_tel'];
     $Id_produit= $_POST['id_sujet'];
     $Id_service= $_POST['id_sujet2'];
    $Date_de_reclamation= $_POST['Date_de_reclamation'];
     $Description= $_POST['Description'];
     $Statut= $_POST['Statut'];

try{

$mail->isSMTP();
$mail->Host='smtp.gmail.com';
$mail->SMTPAuth=true;
$mail->Username='ecolife839@gmail.com';
$mail->Password='sel3ab7ar';
$mail->SMTPSecure= PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port='587';

$mail->setFrom('ecolife839@gmail.com');
$mail->addAddress($Email);

$mail->isHTML(true);
$mail->Subject="Les coordonnees de la reclamation du client ayant l'ID : $CIN ";
$mail->Body="<h3>Nom : $Nom <br> </h3> <h3>Prenom : $Prenom <br> </h3> <h3>Email : $Email <br> </h3> <h3> Numéro de telephone : $Num_tel <br> </h3> <h3>IF produit réclamé : $Id_produit <br> </h3>
<h3>ID service réclamé : $Id_service <br> </h3> <h3>Date de réclamation : $Date_de_reclamation <br> </h3> <h3>Description : $Description <br> </h3> <h3>Statut : $Statut <br> </h3> ";

$mail->send();
$alert='alert';
}catch(Exception $e) {
    $alert='alert'.$e->getMessage();


}


    }

    

  ?>
