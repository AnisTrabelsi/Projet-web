<?php
require '../controller/ReclamC.php';
$reclamc=new reclamc();
$reclamc->supprimerreclam($_GET['id_reclamation']);
header('Location:afficherListeReclams.php');


?>