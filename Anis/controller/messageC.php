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
    $requete="select * from message1 where id_message=:id  ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
[ 
    'id'=>$id,

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
'INSERT INTO message1(id_reclamation_message,CINM,datee,messagee)
VALUES(:id_reclamation_message,:CINM,:datee,:messagee)');

$query->execute([ 
    'id_reclamation_message'=>$message->getid_reclamation_message(),
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
'DELETE FROM message1 WHERE id_message =:id 
');

$querry->execute([ 
    'id'=>$id

]); 
}catch(PDOException $e){
    $e->getMessage();
}}




function modifiermessagea($message,$id_message)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'UPDATE message1 SET id_reclamation_message=:id_reclamation_message,CINM=:CINM,datee=:datee,messagee=:messagee
where id_message=:id_message');

$query->execute([ 
    'id_reclamation_message'=>$message->getid_reclamation_message(),
    'CINM'=>$message->getCINM(),
    'datee'=>$message->getdatee(),
    'messagee'=>$message->getmessage(),
     'id_message'=>$id_message
]); 
}catch(PDOException $e){
    $e->getMessage();
}}


}


?>