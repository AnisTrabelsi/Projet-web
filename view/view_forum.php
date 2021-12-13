<?php
require('../include/head.php');

require_once('../controleur/controleur_question.php');
$questionC= new question_Control();

$question_i=$questionC->id_question();
$question_ans=$questionC->question_answer();
$variable=$question_ans->fetch();
$var=$question_i->fetch();
$categorie = $questionC->categorie();
$var1=$variable['id'];
$var2=$variable['id_categorie'];
$var3=$var['id_question'];
?>

<form  method="Post">
  <thead>
    <tr>
      <th scope="col">Numéro</th>
      <th scope="col">Catégorie</th>
      <th scope="col">Nombre de réponses</th>
      
    </tr>
  </thead>
  <tbody>
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
          <a class="nav-link "  href="acceuil.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="view_forum.php">Les Catégories</a>
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
          <a class="nav-link" href="logoout.php">Déconnexion</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>

<br><br>
 <?php

 
$reponse['1']=0;
$reponse['1']=$questionC->nombre_reponse($var3,$var2,$var1,$reponse['1']);
$reponse['2']=0;
$reponse['3']=0;
$reponse['4']=0;
  $i=1;
  while($c = $categorie->fetch()) {

  
 ?>
    <tr>
      <th scope="row"><?=$i++?></th>
     <?php 
   
     
    ?>
       
      

<?php
     switch($c['id'])
     {
         
        case 1:
            ?>
            <td><a href="newfiel.php<?= $c['id']; ?>">La biomasse</a></td>
     
      
       <td><?=$reponse['1']?></td>
            
       <?php
       
       break;
 ?>

<?php
case 2:
            ?>
            <td><a href="newfiel.php?id_categorie=<?= $_SESSION['id']; ?>" >L'éolien</a>
</td>
            <td><?=$reponse['2']?></td>
       <?php
       
       break;
 ?>
<?php
case 3:
            ?>

<td>  
  <a href="newfiel.php?id_categorie=<?= $c['id']; ?>">L'hydroélectricité</a>
</td>
            <td><?=$reponse['3']?></td>
       <?php
       
       break;
 ?>
<?php
case 4:
            ?>
            
            <td>
  <a href="newfiel.php?id=<?= $c['id_categorie']; ?>" >La géothernie</a>
    
  
</div></td>
            <td><?=$reponse['4']?></td>
       <?php
       
       break;
 ?>
 
      <?php


     }
 ?>
  
   </tr>
   
<?php

} ?>


  </tbody>
</form>



 
