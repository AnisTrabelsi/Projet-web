<?php

require ('../database.php');




  //valider le formulaire
if(isset($_POST['signup']))
{


  //verifier si les champs ne sont pas vides
if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content']))
{


  //les donnees de la question
$question_title = $_POST['title'];
$question_description = $_POST['description'];
$question_content = $_POST['content'];
$question_date= date('d-m-Y');
$question_id_author = $_SESSION['id'];
$question_pseudo_author = $_SESSION['pseudo'];

//inserer la question  sur la question
$insertQ = $bdd->prepare('INSERT INTO questions(titre,description,contenu,id_auteur,pseudo_auteur,date_publication)VALUES (?,?,?,?,?,?) ');

$insertQ->execute(array($question_title,$question_description,$question_content,$question_id_author,$question_pseudo_author,$question_date));

$successmsg= "votre question a bien ete inseree sur le site";

}
else{

$errormsg="veuillez completer tous les champs...";

}


}