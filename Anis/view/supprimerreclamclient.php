<?php
require '../controller/ReclamC.php';
$reclamc=new reclamc();
$reclamc->supprimerreclam($_GET['CIN']);
header('Location:afficherListeReclamspourclient.php');


?>