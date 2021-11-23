<?php
require '../controller/messageC.php';
$messagec=new messagec();
$messagec->supprimermessage($_GET['CINM']);
header('Location:afficherListemessages.php');


?>