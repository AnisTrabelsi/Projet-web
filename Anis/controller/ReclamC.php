<?php
require '../config.php';

class reclamc{  

    function afficherreclam(){
        $requete="select * from reclamation1";
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

function afficherreclamclient($id){
$requete="select * from reclamation1 where CIN=:id";
$config= config::getConnexion();
try{
$query=$config->prepare($requete);
$query->execute(  [  'id'=>$id]
);
$result=$query->fetchAll();
return $result;
}catch (PDOException $e)
{
$e->getMesssage();
}}

function getreclambyid($id){
    $requete="select * from reclamation1 where id_reclamation=:id ";
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

function ajouterreclam($reclam)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'INSERT INTO reclamation1(CIN,Nom,Prenom,Email,Num_tel,Date_de_reclamation,id_sujet,id_sujet2,Descriptionn,Statut)
VALUES(:CIN,:Nom,:Prenom,:Email,:Num_tel,:Date_de_reclamation,:id_sujet,:id_sujet2,:Descriptionn,:Statut)');

$query->execute([ 
    'CIN'=>$reclam->getCIN(),
    'Nom'=>$reclam->getNom(),
    'Prenom'=>$reclam->getPrenom(),
    'Email'=>$reclam->getEmail(),
    'Num_tel'=>$reclam->getNum_tel(),
    'Date_de_reclamation'=>$reclam->getDate_de_reclamation(),
   'id_sujet'=>$reclam->getid_sujet(),
   'id_sujet2'=>$reclam->getid_sujet2(),
   'Descriptionn'=>$reclam->getDescriptionn(),
   'Statut'=>$reclam->getStatut()
]); 
}catch(PDOException $e){
    $e->getMessage();
}}


function supprimerreclam($id){
   
    $config  = config::getConnexion();

try{
    $querry=$config->prepare(
'DELETE FROM reclamation1 WHERE id_reclamation=:id 
');

$querry->execute([ 
    'id'=>$id,



]); 
}catch(PDOException $e){
    $e->getMessage();
}}




function modifierreclam($reclam,$id_reclamation)
{ 
    $config= config::getConnexion();

try{
    $query=$config->prepare(
'UPDATE reclamation1 SET CIN=:CIN,Nom=:Nom,Prenom=:Prenom,Email=:Email,Num_tel=:Num_tel,id_sujet=:id_sujet,id_sujet2=:id_sujet2, Date_de_reclamation=:Date_de_reclamation,Descriptionn=:Descriptionn,Statut=:Statut
where id_reclamation=:id_reclamation ');

$query->execute([ 
    'CIN'=>$reclam->getCIN(),
    'Nom'=>$reclam->getNom(),
    'Prenom'=>$reclam->getPrenom(),
    'Email'=>$reclam->getEmail(),
    'Num_tel'=>$reclam->getNum_tel(),
   'id_sujet'=>$reclam->getid_sujet(),
   'id_sujet2'=>$reclam->getid_sujet2(),
   'Date_de_reclamation'=>$reclam->getDate_de_reclamation(),
   'Descriptionn'=>$reclam->getDescriptionn(),
   'Statut'=>$reclam->getStatut(),
   'id_reclamation'=>$id_reclamation
]); 
}catch(PDOException $e){
    $e->getMessage();
}}

function chercher_message_par_id($id_reclamation){
    $requete="select * from message1 where  id_reclamation_message=:id ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute([
     'id'=>$id_reclamation

    ]);
    $result=$query->fetchAll();
    return $result;
    }catch (PDOException $e)
    {
    $e->getMesssage();
    }}
    

    function tri_reclamtion_ascendant($id){
        $requete="select * from reclamation1 where CIN=:id ORDER BY date_de_reclamation ASC";
        $config= config::getConnexion();
        try{
        $query=$config->prepare($requete);
        $query->execute(  [  'id'=>$id]
        );
        $result=$query->fetchAll();
        return $result;
        }catch (PDOException $e)
        {
        $e->getMesssage();
        }}
      

    function tri_reclamtion_descendant($id){
        $requete="select * from reclamation1 where CIN=:id ORDER BY date_de_reclamation DESC";
        $config= config::getConnexion();
        try{
        $query=$config->prepare($requete);
        $query->execute(  [  'id'=>$id]
        );
        $result=$query->fetchAll();
        return $result;
        }catch (PDOException $e)
        {
        $e->getMesssage();
        }}
      


}
?>