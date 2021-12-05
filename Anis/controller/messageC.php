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

/*function affichermessageclient($id1,$id2){
$requete="select * from message1 where CINM=:id1 AND CINM=:id2  ORDER BY datee ASC";
$config= config::getConnexion();
try{
$query=$config->prepare($requete);
$query->execute(
['id1'=>$id1,
'id2'=>$id2

]

);
$result=$query->fetchAll();
return $result;
}catch (PDOException $e)
{
$e->getMesssage();
}}*/

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




function modifiermessagea($message)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'UPDATE message1 SET CINM=:CINM,messagee=:messagee
where id_reclamation_message=:id_reclamation_message AND datee=:datee');

$query->execute([ 
    'id_reclamation_message'=>$message->getid_reclamation_message(),
    'CINM'=>$message->getCINM(),
    'datee'=>$message->getdatee(),
    'messagee'=>$message->getmessage()

]); 
}catch(PDOException $e){
    $e->getMessage();
}}


}


?>