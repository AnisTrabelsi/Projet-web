<?php 

require('database.php');

//vérifier si l'id de la question est rentrée dans l'url
if(isset($_GET['id']) AND !empty($_GET['id'])){

    //recuperer l'id de la question 
    $idOfTheQuestion = $_GET['id'];


    //verifier si la question existe
    $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
    $checkIfQuestionExists->execute(array($idOfTheQuestion));
    if($checkIfQuestionExists->rowCount() > 0){
    
        //recuperer toutes les dates de la question 
        $questionsInfos = $checkIfQuestionExists->fetch();
        
        //stocker les dates de la question dans des variables propres
        $question_title = $questionsInfos['titre'];
        $question_content = $questionsInfos['contenu'];
        $question_id_author = $questionsInfos['id_auteur'];
        $question_pseudo_author = $questionsInfos['pseudo_auteur'];
        $question_date_publication = $questionsInfos['date_publication'];
    }else{


        $errormsg= "Aucune question n'a été trouvée";

    }
}else{

    $errormsg="aucune question n'a été trouvée";

}

?>