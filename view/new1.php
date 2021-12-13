
<?php

require_once('../controleur/controleur_question.php');

$questionC= new question_Control();


$listequestion=$questionC->afficher_search_question();

?>

<!DOCTYPE html>
<html lang="en">
<?php require '../include/head.php';?>

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
        <?php
if(isset($_SESSION['auth']))
{
    ?>
<li class="nav-item">
          <a class="nav-link" href="../controleur/logoout.php">Déconnexion</a>
        </li>
    <?php
}
?>


        
        
      </ul>
     
    </div>
  </div>
</nav>
    <br></br> 
    
    <div class="container">

<form method="GET">

  <div class="form-group row">

<div class="col-8">
<input type="search" name="search" class="form-control">


</div>
<div class="col-4">

<button class="btn btn-success" type="submit">Rechercher</button>


</div>


  </div>

</form>


<br>

<?php


while($question = $listequestion->fetch()){
if($question['id_categorie']==2){
  ?>

<div class="card">
  <div class="card-header">
 <a href="article.php?id=<?php echo $question['id'];?>">
 
 <?= $question['titre']; ?> 
</a>
  </div>
  <div class="card-body">

  <?php echo $question['description'];  ?>

  </div>
<div class="card-footer">
Publié par <a href="profile.php?id=<?= $question['id_auteur']; ?>">
<?php echo $question['pseudo_auteur'];  ?></a>
 le <?php echo $question['date_publication'];  ?>
</div>

</div>

</br>

<?php


}
}
?>
    </div>

</body>

</html>