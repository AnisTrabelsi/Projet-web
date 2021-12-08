

<?php 


session_start();

if(!isset($_SESSION['auth'])){

header('Location:login.php');

}

require_once('../modele/modele_question.php');
require_once('../controleur/controleur_question.php');

//create a question
$questionM= null;
//create an instance of the controller
$questionC= new question_Control();

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
$question_id_author = $_SESSION['id'];
$question_pseudo_author = $_SESSION['pseudo'];
$question_date= date('d/m/Y');

$questionM =new question_Model($question_title,
$question_description,
$question_content,
$question_id_author,
$question_pseudo_author,
$question_date);
 

//inserer la question  sur la questionc

$questionC->publier_question($questionM);
$successmsg= "votre question a bien ete inseree sur le site";

}
else{

$errormsg="veuillez completer tous les champs...";

}


}


?>

<!DOCTYPE html>
<html lang="en">
  
<?php require '../include/head.php'; ?>

<body>
<?php include '../include/navbar.php'; ?>


<br></br>




<form class= "container" method="POST">
<?php

if(isset($errormsg)){

echo '<p>' .$errormsg.'</p>';

}

else
if(isset($successmsg)){

    echo '<p>' .$successmsg.'</p>';

}

?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    <input type="text " class="form-control" name="title" >
   
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description de la question</label>
    
    <textarea  class="form-control" name= "description"></textarea>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
    <textarea class="form-control" name="content" ></textarea>
   
</div>

  
<button type="submit" class="btn btn-primary" name="signup">Publier la question</button>

</form>
</body>
</html>