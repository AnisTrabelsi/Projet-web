<?php

require('database.php');

//validation du formulaire
if(isset($_POST['signup'])){


    //verifier si les champs sont remplis
    if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content']))
    {
  
//les donnees à faire passer dans la requete
$new_question_title = htmlspecialchars($_POST['title']);
$new_question_description = htmlspecialchars($_POST['description']);
$new_question_content = nl2br(htmlspecialchars($_POST['content']));

//modifier les informations de la question qui possede l'id rentre en parametre dans l'url
$editQuestionOnWebSite =$bdd->prepare('UPDATE questions SET titre = ?, description = ?, contenu = ? WHERE id=?');

$editQuestionOnWebSite->execute(array($new_question_title,$new_question_description,$new_question_content, $idOfQuestion));
//redirection vers la page d'affichage des questions de l'user
header('Location:my-questions.php');

    }else{

$errormsg= "Veuillez compléter tous les champs...";

    }
}


?>