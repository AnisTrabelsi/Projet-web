<?php 

//recuperer l'id de l'user
require('database.php');
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //l'id de l'user
$idOfUser = $_GET['id']; 

//verifier si il existe
$checkIfUserExists = $bdd->prepare('SELECT pseudo,nom,prenom FROM users WHERE id = ?');

$checkIfUserExists->execute(array($_GET['id']));

if($checkIfUserExists->rowCount() > 0){
//recuperer toutes les donnees de l'user
$usersInfos = $checkIfUserExists->fetch();

$user_pseudo = $usersInfos['pseudo'];
$user_nom= $usersInfos['nom'];
$user_prenom = $usersInfos['prenom'];
 
//recuperer toutes les questions publiées par l'user
$getisquestion = $bdd->prepare('SELECT * FROM questions WHERE  id_auteur= ? ORDER BY id DESC ');

$getisquestion->execute(array($_GET['id']));


}else{

    $errormsg= "aucun utilisateur trouvé";

}

}else{

$errormsg= "aucun utilisateur trouvé";


}








?>