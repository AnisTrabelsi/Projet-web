
<?php 

require_once('../controleur/controleur_question.php');
$userC=new question_Control();
// validation du formulaire
if(isset($_POST['signup']))
{//1 c'est bon

  //verifier si l'user a bien complete les champs
  if(!empty($_POST['pseudo']) AND  !empty($_POST['password']))
  {//2
      //les donnees de l'user
  $user_pseudo = $_POST['pseudo'];
  $user_password =$_POST['password'];
  //verifier si l'user existe(si le pseudo est correct)
  $checkIfUserExists = $userC->login($user_pseudo);
  
  if($checkIfUserExists->rowCount() > 0){//3
      //recuperer les donnees de l'user
  $usersinfos = $checkIfUserExists->fetch();
  //verifier si le mot de passe est  correct
  if(strcmp($user_password, $usersinfos['code'])==0){
      //4
  //authentifier l'user sur le site et recuperer ses donnees dans les variables globales sessions  
      $_SESSION['auth']= true;
      $_SESSION['id']=$usersinfos['id'];
      $_SESSION['nom']=$usersinfos['nom'];
      $_SESSION['prenom']=$usersinfos['prenom'];
      $_SESSION['pseudo']=$usersinfos['pseudo'];
    
      //rediriger l'user vers la page d'accueil
  header('Location: view_forum.php');
  
  
  }//4 
  
  else{ $errormsg="votre mot de passe est incorrect";
  }
  
  
  
  }//3
  else{
      
      $errormsg="votre pseudo est incorrect";
  
  }
  }
  
  }
  else
  
  {
  
  $errormsg="veuillez completer tous les champs";
  
  }
  



?>


<!DOCTYPE html>


<html lang="en">
    <?php 
    
    include '../include/head.php';
    
    ?>

    <body>
    <br></br>
<form class= "container" method="POST">
<?php

if(isset($errormsg)){

echo '<p>' .$errormsg.'</p>';

}

?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Pseudo</label>
    <input type="text " class="form-control" name="pseudo" >
   



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name= "password">
  </div>

  
<button type="submit" class="btn btn-primary" name="signup">Log in</button>

<br><br>
<a href ="signup.php"><p>Je n'ai pas de compte, je m'inscris </p></a>

 
</form>

    </body>
    </html>