<?php

require ('database.php');

//verifier si l'id de la question est bien passee dans l'url
if(isset($_GET['id']) AND !empty($_GET['id'])){



$idOfQuestion = $_GET['id'];

//verifier si la question existe
$checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');


$checkIfQuestionExists->execute(array($idOfQuestion));

if($checkIfQuestionExists->rowCount() > 0){

    //recuperer les donnees de la question
$questionInfos = $checkIfQuestionExists->fetch();

if($questionInfos['id_auteur']==$_SESSION['id']){

$question_title = $questionInfos['titre'];
$question_description = $questionInfos['description'];
$question_content = $questionInfos['contenu'];


$question_description = str_replace('<br/>','',$question_description);
$question_content= str_replace('<br/>','',$question_content);

}else{
    $errormsg="vous n'etes pas l'auteur de cette question";  
}



}else
{

    $errormsg="Aucune question n'a été trouvée"; 

}


}else{
    $errormsg="Aucune question n'a été trouvée";
}








?>