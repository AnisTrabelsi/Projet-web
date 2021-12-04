
<?php 
session_start();
require ('showOneUsersProfileAction.php');
?>

<!DOCTYPE html>
<html lang="en">

<?php 
include('include/head.php');
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
      
    
      
  <img src= 'asset/img/logo.png' width='30px'/>   <a class="navbar-brand" href=""   
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
          <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profile</a>
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

if(isset($getisquestion)){
  
  ?>
<div class="card">
<div class="card-body">

<h4><?= $user_pseudo ;?></h4>
<br>

<p><?= $user_nom.' '.$user_prenom ;?></p>


</div>
</div>
  <br>
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