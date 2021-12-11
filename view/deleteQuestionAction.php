<?php 


require_once('../controleur/controleur_question.php');
$questionC=new question_Control();
$questionC->supprimer_question($idOfTheQuestion);
//verifier si l'id est rentré en paramètre dans l'url
if(isset($_GET['id']) AND !empty($_GET['id']))
{
//l'id de la question en paramètre
$idOfTheQuestion = $_GET['id'];
//verifier si la question existe
$chechIfQuestionExists= $questionC->supprimer_questionAction($idOfTheQuestion);
if($chechIfQuestionExists->rowCount() > 0)
{
    //recuperer les infos de la question
$questionsInfos = $chechIfQuestionExists->fetch();
if($questionsInfos['id_auteur'] == $_SESSION['id'])
{
    //supprimer la question en fonction de son id rentré en paramètre
$questionC->supprimer_question($idOfTheQuestion);
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