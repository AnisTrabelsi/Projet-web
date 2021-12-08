

<?php  
session_start();
require('showArticleContentAction.php');
require('postAnswerAction.php');
require('showAllAnswersOfQuestionAction.php');
?>

<!DOCTYPE html>
<html lang="en">
    <?php require ('include/head.php'); ?>
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

<br></br>
<div class="container">
  <?php 
if(isset($errormsg)){
echo $errormsg;

}

  if(isset($question_date_publication)){
    ?>
    <section class="show-content">
    
    <h3><?= $question_title;?></h3> 
    <hr>
    
<p><?= $question_content ;?></p>
<hr>

<small><?= '<a href="profile.php?id='.$question_id_author.'">'.$question_pseudo_author .' </a>'.  $question_date_publication; ?></small>
     </section>
  </br>
<section class="show-answers">
  
  <form class="form-group" method="POST">
  <div class="mb-3">

    <label for="exampleInputEmail1" class="form-label">Reponse :</label>
    <textarea name="answer"  class="form-control"></textarea>
   <br>
    <button class="btn btn-primary" type="submit" name="signup">Repondre</button>
  </div>
  </form>
<?php
while($answer = $getAllAnswersOfThisQuestion->fetch()){
  ?>

<div class="card">
<div class="card-header">
 <a href="profile.php?id=<?= $answer['id_auteur'];?>"><?= $answer['pseudo_auteur'];?>
</a>
</div>
<div class="card-body">

<?= $answer['contenu'];?>

</div>
</div>
<br>
<?php

}
?>

</section>

    <?php
  }
?>

</div>
</body>
</html>