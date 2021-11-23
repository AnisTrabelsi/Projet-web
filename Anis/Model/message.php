<?php
class message{
private $messagee;
private $CINM;
private $datee;




function __construct($CINM,$datee,$messagee){
$this->CINM=$CINM;
$this->datee=$datee;
$this->messagee=$messagee;


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




function getCINM()
{return $this->CINM;}

function getdatee()
{return $this->datee;}

function getmessage()
{return $this->messagee;}






}

?>