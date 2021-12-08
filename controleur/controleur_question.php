<?php

require ('../base.php');
require_once('../modele/modele_question.php');
class question_Control{
  
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

}

?>
