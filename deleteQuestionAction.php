<?php 
require('controleur/securityAction.php');
require('database.php');

//verifier si l'id est rentré en paramètre dans l'url
if(isset($_GET['id']) AND !empty($_GET['id']))
{
//l'id de la question en paramètre
$idOfTheQuestion = $_GET['id'];
//verifier si la question existe
$chechIfQuestionExists= $bdd->prepare('SELECT id_auteur FROM questions WHERE id=?');
$chechIfQuestionExists->execute(array($idOfTheQuestion));


if($chechIfQuestionExists->rowCount() > 0)
{
    //recuperer les infos de la question
$questionsInfos = $chechIfQuestionExists->fetch();
if($questionsInfos['id_auteur'] == $_SESSION['id'])
{
    //supprimer la question en fonction de son id rentré en paramètre
$deletethisquestion = $bdd->prepare('DELETE FROM questions WHERE id= ?');
$deletethisquestion->execute(array($idOfTheQuestion));
//rediriger l'utilisateur vers ses questions
header('Location: my-questions.php');

}else{
    echo "Vous n'avez le droit de supprimer cette question!!";
}


}else{
    echo "Aucune question n'a été trouvée";
}


}
else{
    echo "Aucune question n'a été trouvée";
}





?>