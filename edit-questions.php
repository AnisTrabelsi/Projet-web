

<?php 

require('controleur/securityAction.php'); 
require('geteditQuestionAction.php');
require('editQuestionAction.php');

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
          <a class="nav-link "  href="accueil.php">Les questions</a>
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