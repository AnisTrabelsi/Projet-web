<?php

require_once('../controleur/securityAction.php');
require ('../base.php');
require_once('../modele/modele_answer.php');
require_once('../modele/modele_question.php');
class question_Control{
  
function categorie()
{
  $bdd = config::getConnexion();

  $categorie = $bdd->query('SELECT * FROM categorie ORDER BY nom');
  
  
  return $categorie;

}

function nombre_reponse($num)
{ 
  $bdd = config::getConnexion();
  
$rep=0;
  $tab = $bdd->query('SELECT q.id,q.id_categorie,a.id_question
FROM questions q
JOIN answers a ON q.id =  a.id_question ');
  
  
  while($n = $tab->fetch())
  {
    if($n['id_categorie'])
    $rep=$rep+1;
  }
  
  return $rep;
}

function id_question()
{
  $bdd = config::getConnexion();
  $question_i= $bdd->query('SELECT id_question FROM answers');
  
  return $question_i;

}

function question_answer()
{
  $bdd = config::getConnexion();
  $question_i= $bdd->query('SELECT id, id_categorie FROM questions');
  
  return $question_i;

}

  function publier_question($questionM){
  $sql="INSERT INTO questions(titre, description, contenu,id_auteur,pseudo_auteur,date_publication) 
  VALUES (:titre,:description,:contenu,:id_auteur,:pseudo_auteur,:date_publication)";
  $bdd = config::getConnexion();
  try{
    $query = $bdd->prepare($sql);
    $query->execute([
      'titre' => $questionM->gettitre(),
      'description' => $questionM->getdescription(),
      'contenu' => $questionM->getcontenu(),
      'id_auteur' => $questionM->getid_auteur(),
      'pseudo_auteur' => $questionM->getpseudo_auteur(),
      'date_publication' => $questionM->getdate_publication()
    ]);			
  }
  catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
  }			
}


function afficher_search_question(){
  $bdd = config::getConnexion();
  //recuperer les questions par defaut sans recherche 
$getAllQuestions=$bdd->query('SELECT * FROM questions ORDER BY id DESC');

//verifier si une recherche a été rentrée par l'utilisateur
if(isset($_GET['search']) AND !empty($_GET['search']))
{
//la recherche 
$usersSearch = $_GET['search'];
//recuperer toutes les questions qui correspondent à la recherche(en fonction du titre) 
$getAllQuestions = $bdd->query('SELECT * FROM questions WHERE titre LIKE "%'.$usersSearch.'%"  ORDER BY id DESC');

}

return $getAllQuestions;

}


function showArticleContentAction($id){
  $bdd = config::getConnexion();
   //verifier si la question existe
  $checkIfQuestionExists = $bdd->prepare('SELECT * FROM questions WHERE id = ?');
  $checkIfQuestionExists->execute(array($id));
return $checkIfQuestionExists;
 }

 function postAnswerAction($answerM){
  $sql="INSERT INTO answers (id_auteur,pseudo_auteur,id_question,contenu) 
  VALUES (:id_auteur,:pseudo_auteur,:id_question,:contenu)";
  $bdd = config::getConnexion();
  try{
    $query = $bdd->prepare($sql);
    $query->execute([
      'id_auteur' => $answerM->get_id_auteur(),
      'pseudo_auteur' => $answerM->get_pseudo_auteur(),
      'id_question' => $answerM->get_id_question(),
      'contenu' => $answerM->get_contenu(),
     
    ]);			
  }
  catch (Exception $e){
    echo 'Erreur: '.$e->getMessage();
  }			

}


function showAllAnswersOfQuestionAction($id)
{
  $bdd= config::getConnexion();
  $getAllAnswersOfThisQuestion = $bdd->prepare('SELECT id_auteur, pseudo_auteur, id_question, contenu FROM answers WHERE id_auteur= ? ORDER BY id DESC');
  $getAllAnswersOfThisQuestion->execute(array($id));
  return $getAllAnswersOfThisQuestion;

}


function login($user_pseudo){
  $bdd= config::getConnexion();
  $checkIfUserExists = $bdd->prepare('SELECT * FROM users WHERE pseudo = ?');
  $checkIfUserExists->execute(array($user_pseudo));
   return $checkIfUserExists;  

}
function signup_verify($user_pseudo){
  $bdd= config::getConnexion();
  $checkIfUserAlreadyExists = $bdd->prepare('SELECT pseudo FROM users WHERE pseudo = ?');
  
  $checkIfUserAlreadyExists->execute(array($user_pseudo));
return $checkIfUserAlreadyExists;

}
function signup_insert($user_pseudo,$user_nom,$user_prenom,$user_password){
  $bdd= config::getConnexion();
  $insertUserOnWebsite = $bdd->prepare('INSERT INTO users(pseudo,nom,prenom,code) VALUES(?,?,?,?)');
  
  
  $insertUserOnWebsite->execute(array($user_pseudo,$user_nom,$user_prenom,$user_password));


}

function signup_recuperer_user($user_pseudo, $user_nom, $user_prenom)
{
  $bdd= config::getConnexion();

  $getinfos= $bdd->prepare('SELECT * FROM users WHERE  pseudo=? AND nom = ? AND prenom = ?');
  
  
  $getinfos->execute(array($user_pseudo, $user_nom, $user_prenom));
  return $getinfos;


}

function show_cat($id){
  $bdd= config::getConnexion();
  $check = $bdd->prepare('SELECT * FROM questions WHERE id = ?');

  $check->execute(array($id));
return $check;

} 
function show_user($id){
  $bdd= config::getConnexion();
  $checkIfUserExists = $bdd->prepare('SELECT pseudo,nom,prenom FROM users WHERE id = ?');

  $checkIfUserExists->execute(array($id));
return $checkIfUserExists;

} 
function show_question($id){
  $bdd= config::getConnexion();
  $getisquestion = $bdd->prepare('SELECT * FROM questions WHERE  id_categorie= ? ORDER BY id DESC ');

  $getisquestion->execute(array($id));

  return $getisquestion;


}
function afficher_question(){
  $sql="SELECT * FROM  questions WHERE id_auteur= ? ORDER BY id DESC";
  $bdd= config::getConnexion();
  try{
      $getallmyquestions = $bdd->prepare($sql);
      $getallmyquestions->execute(array($_SESSION['id']));
      return $getallmyquestions;
  }
  catch(Exception $e){
      die('Erreur:'. $e->getMeesage());
  }
}

function afficher_questionAction($id){
  $sql="SELECT * FROM  questions WHERE id= ?";
  $bdd= config::getConnexion();
  try{
      $getallmyquestions = $bdd->prepare($sql);
      $getallmyquestions->execute(array($id));
      return $getallmyquestions;
  }
  catch(Exception $e){
      die('Erreur:'. $e->getMeesage());
  }
}


function modifier_question($questionM,$id){
  try {
    $bdd = config::getConnexion();
    $query = $bdd->prepare(
      'UPDATE questions SET 
        titre= :titre, 
        description= :description, 
        contenu= :contenu,
        date_publication= :date_publication
      WHERE id= :id'
    );
    $query->execute([
      'titre' => $questionM->gettitre(),
      'description' => $questionM->getdescription(),
      'contenu' => $questionM->getcontenu(),
      'date_publication' => $questionM->getdate_publication(),
      'id' => $id
    ]);
    echo $query->rowCount() . " records UPDATED successfully <br>";
  } catch (PDOException $e) {
    $e->getMessage();
  }
}

function supprimer_questionAction($id){
  $sql="SELECT id_auteur FROM  questions WHERE id= ?";
  $bdd= config::getConnexion();
  try{
      $getallmyquestions = $bdd->prepare($sql);
      $getallmyquestions->execute(array($id));
      return $getallmyquestions;
  }
  catch(Exception $e){
      die('Erreur:'. $e->getMeesage());
  }
}


function supprimer_question($id){
  $sql="DELETE FROM questions WHERE id=?";
  $bdd= config::getConnexion();
    try{
    $req=$bdd->prepare($sql);
    $req->execute(array($id));
  }
  catch(Exception $e){
    die('Erreur:'. $e->getMeesage());
  }
}

}

?>
