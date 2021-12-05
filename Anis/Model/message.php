<?php
class message{
private $id_message;
private $id_reclamation_message;
private $CINM;
private $datee;
private $messagee;




function __construct($id_reclamation_message,$CINM,$datee,$messagee){
$this->id_reclamation_message=$id_reclamation_message;
$this->CINM=$CINM;
$this->datee=$datee;
$this->messagee=$messagee;


}

function setid_reclamation_message(string $id_reclamation_message)
{$this->id_reclamation_message=$id_reclamation_message;
}

function setCINM(string $CINM)
{$this->CINM=$CINM;
}

function setdate(string $datee)
{$this->datee=$datee;
}

function setmessage(string $messagee)
{$this->messagee=$messagee;
}




function getid_reclamation_message()
{return $this->id_reclamation_message;}


function getCINM()
{return $this->CINM;}


function getdatee()
{return $this->datee;}


function getmessage()
{return $this->messagee;}






}

?>