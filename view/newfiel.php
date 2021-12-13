
<?php 

require_once('../modele/modele_question.php');
require_once('../controleur/controleur_question.php');
$questionC= new question_Control();
//recuperer l'id de l'user

if(isset($_GET['id']) AND !empty($_GET['id'])){

    //l'id de l'user
$idcat = $_GET['id']; 

//verifier si il existe

$check=$questionC->show_cat($idcat);


//recuperer toutes les donnees de l'user
$catInfos = $checkIfUserExists->fetch();
 
//recuperer toutes les questions publiées par l'user
$getisquestion = $questionC->show_question($idcat);


}

?>

<!DOCTYPE html>
<html lang="en">

<?php 
include('../include/head.php');
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      
    
      
  <img src= '../asset/img/logo.png' width='30px'/>   <a class="navbar-brand" href=""   
    >Forum</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link "  href="accueil.php">Accueil</a>
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

<?php 


if(isset($getisquestion)){
  
  ?>

  <?php

  while($question = $getisquestion->fetch()){
 ?>
<div class="card">
  <div class="card-header">
  <?= $question['titre'] ; ?>
  </div>
<div class="card-body">
<?= $question['description'] ; ?>
</div>

<div class="card-footer">
Par  <?= $question['pseudo_auteur'] ; ?> le  <?= $question['date_publication'] ; ?>
</div>

</div>

<br>
    <?php
  }

  
 

}



?>
</div>
</body>
</html>