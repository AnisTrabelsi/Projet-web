<?php
require '../config.php';

class messagec{  
function affichermessage(){
$requete="select * from message1 ORDER BY datee ASC";
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
    $requete="select * from message1 where datee=:id ";
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
'INSERT INTO message1(CINM,id_produit_message,id_service_message,datee,messagee)
VALUES(:CINM,:id_produit_message,:id_service_message,:datee,:messagee)');

$query->execute([ 
    'CINM'=>$message->getCINM(),
    'id_produit_message'=>$message->getid_produit_message(),
    'id_service_message'=>$message->getid_service_message(),
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
'DELETE FROM message1 WHERE datee =:id
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
'UPDATE message1 SET CINM=:CINM,id_produit_message=:id_produit_message,id_service_message=:id_service_message,messagee=:messagee
where datee=:datee');

$query->execute([ 
    'CINM'=>$message->getCINM(),
    'id_produit_message'=>$message->getid_produit_message(),
    'id_service_message'=>$message->getid_service_message(),
    'datee'=>$message->getdatee(),
    'messagee'=>$message->getmessage()

]); 
}catch(PDOException $e){
    $e->getMessage();
}}


}


?>