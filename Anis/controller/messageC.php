<?php
require '../config.php';

class messagec{  
function affichermessage(){
$requete="select * from message1";
$config= config::getConnexion();
try{
$query=$config->prepare($requete);
$query->execute();
$result=$query->fetchAll();
return $result;
}catch (PDOException $e)
{
$e->getMesssage();
}}

function getmessagebyid($id){
    $requete="select * from message1 where CINM=:id ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$id
]
    );
    $result=$query->fetch();
    return $result;
    }catch (PDOException $e)
    {
    $e->getMesssage();
    }
    }

function ajoutermessage($message)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'INSERT INTO message1(CINM,datee,messagee)
VALUES(:CINM,:datee,:messagee)');

$query->execute([ 
    'CINM'=>$message->getCINM(),
    'datee'=>$message->getdatee(),
    'messagee'=>$message->getmessage()
 
]); 
}catch(PDOException $e){
    $e->getMessage();
}}


function supprimermessage($id){
   
    $config  = config::getConnexion();

try{
    $querry=$config->prepare(
'DELETE FROM message1 WHERE CINM =:id
');

$querry->execute([ 
    'id'=>$id

]); 
}catch(PDOException $e){
    $e->getMessage();
}}




function modifiermessage($message)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'UPDATE message1 SET datee=:datee,messagee=:messagee
where CINM=:CINM');

$query->execute([ 
    'CINM'=>$message->getCINM(),
    'datee'=>$message->getdatee(),
    'messagee'=>$message->getmessage()

]); 
}catch(PDOException $e){
    $e->getMessage();
}}

}
?>