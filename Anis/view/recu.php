
<?php
require '../controller/ReclamC.php';

session_start();
$_SESSION['id']='00000000';
$_SESSION['Nom']='Anis';
$_SESSION['Prenom']='Trabelsi';
$_SESSION['Email']='eco-life@gmail.com';
$_SESSION['Num_tel']='27938360';


$reclamd=new reclamc();
$reclams=$reclamd->afficherreclamclient($_SESSION['id']);
 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
       <!-- Css Styles -->
       <link rel="stylesheet" href="/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <meta charset="utf-8">
    <title>Reçu de réclamations</title>
    <link rel="stylesheet" href="assets/stylerecu.css" media="all" />
  </head>
  <body onload="window.print()">
    <header class="clearfix">
      <div id="logo">
        <img src="assets/logo1.png">
      </div>
      <div id="company">
        <h2 class="name">Eco-life.tn</h2>
        <div>ATunisie,Ariana,el-ghazela</div>
        <div>27938360</div>
        <div>ecolife839@gmail.com</div>
      </div>
      </div>
    </header>
    <main>
      <div id="details" class="clearfix">
        <div id="client">
      
          <div class="to">les réclamations de: </div>
          <h2 class="name"><?php echo $_SESSION["Nom"]; ?> <?php echo $_SESSION["Prenom"]; ?></h2>
          <div class="address">Numero de téléphone: <br> <?php echo $_SESSION["Num_tel"]; ?> </div>
          <div class="email"> Email: <?php echo $_SESSION["Email"]; ?> </div>
        </div>
        <div id="invoice">
          <h1>l'utilisateur ayant l'ID :</h1>
          <div class="date"><?php echo $_SESSION['id']; ?></div>
        </div>
    
      </div>
      <table border="0" cellspacing="0" cellpadding="0" align="center">
        <thead>
          <tr align="center">
            <th class="total">Date de<br>réclamation</th>
            <th class="total">ID produit réclamé</th>
            <th class="total">ID service réclamé</th>
            <th class="total">Description</th>
            <th class="total">Statut de <br> la réclamation</th>
          </tr>
        </thead>
        <?php 
        foreach($reclams as $value){
                            ?>
        <tbody>
          <tr align="center">
            <td class="unit"><?php echo $value["Date_de_reclamation"]; ?></td>
            <td class="unit"><?php echo $value["id_sujet"]; ?></td>
            <td class="unit">  <?php echo $value["id_sujet2"]; ?> </td>
            <td class="unit"> <?php echo $value["Descriptionn"]; ?></td>
            <td class="unit"> <?php echo $value["Statut"]; ?>  </td>
          </tr>
          
       
        </tbody>
        <?php } ?>
  
      </table>
 
      <div id="notices">
        <div>NOTICE:</div>
        <div class="notice">Ce reçu est très important </div>
      </div>
    </main>
    <footer>
Eco-life.tn est à votre service    </footer>
  </body>
</html>

