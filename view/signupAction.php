<?php 
 session_start();
       require('database.php');


// validation du formulaire

if(isset($_POST['signup'])){
//verifier si l'user a bien complete les champs
if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['password']))
{
    //les donnees de l'user
$user_pseudo = $_POST['pseudo'];
$user_nom = $_POST['nom'];
$user_prenom = $_POST['prenom'];
$user_password = $_POST['password'];


//verifier si l'user existe deja sur le site
$checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');

$checkIfUserAlreadyExists->execute(array($user_pseudo));

if($checkIfUserAlreadyExists->rowCount() == 0){

    //inserer l'user dans la bdd
$insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo,nom,prenom,code) VALUES(?,?,?,?)');


$insertUserOnWebsite->execute(array($user_pseudo,$user_nom,$user_prenom,$user_password));

//recuperer les infos de l'user 
$getinfos= $bdd->prepare('SELECT * FROM users WHERE  pseudo=? AND nom = ? AND prenom = ?');


$getinfos->execute(array($user_pseudo, $user_nom, $user_prenom));

//authentifier l'user sur le site et recuperer ses donnees dans les variables globales sessions 
$userInfos =$getinfos->fetch();

$_SESSION['auth']= true;
$_SESSION['id']=$userInfos['id'];
$_SESSION['nom']=$userInfos['nom'];
$_SESSION['prenom']=$userInfos['prenom'];
$_SESSION['pseudo']=$userInfos['pseudo'];


//rediriger l'user  vers la page d'accueil
header('Location: accueil.php');

}


else{
    
    $errormsg="L'utilisateur existe deja sur le site";
}
}

}
else

{

$errormsg="veuillez completer tous les champs";

}



?>