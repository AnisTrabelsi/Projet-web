<?php
require '../controller/messageC.php';
$messagec=new messagec();
$messagec->supprimermessage($_GET['id_message']);
header('Location:afficherListemessagesclient.php');


?>