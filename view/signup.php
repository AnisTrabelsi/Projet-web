


<?php 
require_once('../controleur/controleur_question.php');
$questionC= new question_Control();
// validation du formulaire

if(isset($_POST['signup'])){
  //verifier si l'user a bien complete les champs
  if(!empty($_POST['pseudo']) AND !empty($_POST['nom']) AND !empty($_POST['prenom']) AND !empty($_POST['password']))
  {
      //les donnees de l'user
  $user_pseudo = $_POST['pseudo'];
  $user_nom = $_POST['nom'];
  $user_prenom = $_POST['prenom'];
  $user_password = $_POST['password'];
  
  
  //verifier si l'user existe deja sur le site
  $checkIfUserAlreadyExists = $questionC->signup_verify($user_pseudo);
  
  if($checkIfUserAlreadyExists->rowCount() == 0){
  
      //inserer l'user dans la bdd
    
  $insertUserOnWebsite = $questionC->signup_insert($user_pseudo,$user_nom,$user_prenom,$user_password);
  
  //recuperer les infos de l'user 
 
  
  
  $getinfos= $questionC->signup_recuperer_user($user_pseudo, $user_nom, $user_prenom);
  
  //authentifier l'user sur le site et recuperer ses donnees dans les variables globales sessions 
  $userInfos =$getinfos->fetch();
  
  $_SESSION['auth']= true;
  $_SESSION['id']=$userInfos['id'];
  $_SESSION['nom']=$userInfos['nom'];
  $_SESSION['prenom']=$userInfos['prenom'];
  $_SESSION['pseudo']=$userInfos['pseudo'];
  
  
  //rediriger l'user  vers la page d'accueil
  header('Location: accueil.php');
  
  }
  
  
  else{
      
      $errormsg="L'utilisateur existe deja sur le site";
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
 include '../include/head.php'; ?>
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
   
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Lastname</label>
    <input type="text " class="form-control" name= "nom">
   
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Firstname</label>
    <input type="text " class="form-control" name="prenom" >
   
</div>


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" name= "password">
  </div>

  
  
<button type="submit" class="btn btn-primary" name="signup">Sign up</button>
<br><br>
<a href ="login.php"><p>J'ai deja un compte, je me connecte </p></a>
 
</form>
</body>
</html>
