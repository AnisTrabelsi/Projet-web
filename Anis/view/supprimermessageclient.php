<?php
require '../controller/messageC.php';
$messagec=new messagec();
$messagec->supprimermessage($_GET['datee']);
header('Location:afficherListemessagesclient.php');


?>