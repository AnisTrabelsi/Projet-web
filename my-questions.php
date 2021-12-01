
<?php

require('controleur/securityAction.php'); 
require('myQuestionAction.php');

 ?>


<!DOCTYPE html>
<html lang="en">

<?php include 'include/head.php'; ?>

    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      
    
      
  <img src= 'asset/img/logo.png' width='30px'/>   <a class="navbar-brand" href="#"   
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
          <a class="nav-link" href="view/publish-question.php">Publier une question </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="my-questions.php">Mes questions </a>
        </li>
        
        
        <li class="nav-item">
          <a class="nav-link" href="logoout.php">Déconnexion</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
   
<div class="container">

<?php 


while($question = $getallmyquestions->fetch())
{
    
    ?>


<div class="card">
  <h5 class="card-header">
    
  <a href="article.php?id=<?= $question['id'];?>">
 
 <?= $question['titre']; ?> 
</a>
    
   
  </h5>

<br><br>

  <div class="card-body">
    
      
      <p class="card-text">
          
      <?= $question['description'];  ?>
      <?= $question['contenu'];  ?>
    
    </p>
    <a href="article.php?id=<?= $question['id']; ?>" class="btn btn-primary">Acceder à la question</a>
    <a href="edit-questions.php?id=<?= $question['id'];?>" class="btn btn-warning">Modifier l'article</a>
    <a href="deleteQuestionAction.php?id=<?= $question['id'];?>" class="btn btn-danger">Supprimer l'article</a>


  </div>
</div>



<br>
    <?php


}





?>

</div>
</body>
</html>