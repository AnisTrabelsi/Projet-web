<?php
session_start();
require('../database.php');

//tu as besoin du modele


class usersC{

function read_users(){

// validation du formulaire
if(isset($_POST['signup'])){//1 c'est bon




    //verifier si l'user a bien complete les champs
    if(!empty($_POST['pseudo']) AND  !empty($_POST['password']))
    {//2
        //les donnees de l'user
    $user_pseudo = $_POST['pseudo'];
    $user_password =$_POST['password'];
    //verifier si l'user existe(si le pseudo est correct)
    $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
    $checkIfUserExists->execute(array($user_pseudo));
    
    
    if($checkIfUserExists->rowCount() > 0){//3
        //recuperer les donnees de l'user
    $usersinfos = $checkIfUserExists->fetch();
    //verifier si le mot de passe est  correct
    if(password_verify($user_password, $usersinfos['code'])==0){
        //4
    //authentifier l'user sur le site et recuperer ses donnees dans les variables globales sessions  
        $_SESSION['auth']= true;
        $_SESSION['id']=$usersinfos['id'];
        $_SESSION['nom']=$usersinfos['nom'];
        $_SESSION['prenom']=$usersinfos['prenom'];
        $_SESSION['pseudo']=$usersinfos['pseudo'];
      
        //rediriger l'user vers la page d'accueil
    header('Location: accueil.php');
    
    
    }//4 
    
    else{ $errormsg="votre mot de passe est incorrect";
    }
    
    
    
    }//3
    else{
        
        $errormsg="votre pseudo est incorrect";
    
    }
    }
    
    }
    else
    
    {
    
    $errormsg="veuillez completer tous les champs";
    
    }
    

}



   
}



?>

