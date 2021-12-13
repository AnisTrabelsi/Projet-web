

<?php 



require_once('../modele/modele_question.php'); 
require_once('../controleur/controleur_question.php'); 



//verifier si l'id de la question est bien passee dans l'url

$questionM=null;
$questionC= new question_Control();

if(isset($_GET['id']) AND !empty($_GET['id'])){



  $idOfQuestion = $_GET['id'];
  
  //verifier si la question existe

  $checkIfQuestionExists = $questionC->afficher_questionAction($idOfQuestion);
  
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
  ///////////////////////////////////////////////////////
//validation du formulaire
if(isset($_POST['signup'])){


  //verifier si les champs sont remplis
  if(!empty($_POST['title']) AND !empty($_POST['description']) AND !empty($_POST['content']))
  {

//les donnees à faire passer dans la requete
$new_question_title = htmlspecialchars($_POST['title']);
$new_question_description = htmlspecialchars($_POST['description']);
$new_question_content = nl2br(htmlspecialchars($_POST['content']));
$new_question_id_author=$_Post['id_auteur'];
$new_question_pseudo_author=$_Post['pseudo_auteur'];
$new_date_publication=date('d/m/Y');

$questionM= new question_Model(
$new_question_title,
$new_question_description,
$new_question_content,
$new_question_id_author,
$new_question_pseudo_author,
$new_date_publication
);

$questionC->modifier_question($questionM,$idOfQuestion);
header('Location:my-questions.php');

  }else{

$errormsg= "Veuillez compléter tous les champs...";

  }
}

 ?>

<!DOCTYPE html>
<html lang="en">
  
<?php include '../include/head.php'; ?>


  <body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">  
  <img src= '../asset/img/logo.png' width='30px'/>   <a class="navbar-brand" href="#"   
    >Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="accueil.php">Les questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="publish-question.php">Publier une question </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profile</a>
        </li>
        

        <li class="nav-item">
          <a class="nav-link" href="../controleur/logoout.php">Déconnexion</a>
        </li>
        
        
      </ul>
     
    </div>
  </div>
</nav>




<br></br>


<div class="container">

<?php if(isset($errormsg)){  echo '<p>' .$errormsg.'</p>';  } ?>


<?php 


if(isset($question_content)){  ?>

<form  method="POST">


  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    
    <input type="text " class="form-control" name="title" value= "<?= $question_title; ?>" >
   
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description de la question</label>
    
    <textarea  class="form-control" name= "description"><?= $question_description;?></textarea>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
    <textarea class="form-control" name="content" ><?= $question_content; ?></textarea>
   
</div>

  
<button type="submit" class="btn btn-primary" name="signup">Modifier la question</button>

</form>


<?php


}

?>

</div>

</body>
</html>