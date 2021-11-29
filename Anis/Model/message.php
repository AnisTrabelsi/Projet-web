<?php
class message{
private $CINM;
private $id_produit_message;
private $id_service_message;
private $datee;
private $messagee;




function __construct($CINM,$id_produit_message,$id_service_message,$datee,$messagee){
$this->CINM=$CINM;
$this->id_produit_message=$id_produit_message;
$this->id_service_message=$id_service_message;
$this->datee=$datee;
$this->messagee=$messagee;


}

function setCINM(string $CINM)
{$this->CINM=$CINM;
}

function setid_produit_message(string $id_produit_message)
{$this->id_produit_message=$id_produit_message;
}

function setid_service_message(string $id_service_message)
{$this->id_service_message=$id_service_message;
}
function setdate(string $datee)
{$this->datee=$datee;
}

function setmessage(string $messagee)
{$this->messagee=$messagee;
}




function getCINM()
{return $this->CINM;}

function getid_produit_message()
{return $this->id_produit_message;}

function getid_service_message()
{return $this->id_service_message;}


function getdatee()
{return $this->datee;}


function getmessage()
{return $this->messagee;}






}

?>