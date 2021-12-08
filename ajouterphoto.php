<?php
session_start();
require('include/head.php');
if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']) )
{
$taillemax = 2097152; 
$extensionsValides = array('jpg', 'jpeg', 'gif','png');
if($_FILES['avatar']['size'] <= $taillemax)
{

$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
if(in_array($extensionUpload, $extensionsValides)){
$chemin = "asset/img/".$_SESSION['id'].".".$extensionUpload;
$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
if($resultat){

$updateavatar =$bdd->prepare('UPDATE users SET avatar = :avatar WHERE id = :id');
$updateavatar->execute(array(
'avatar'=>$_SESSION['id'].".".$extensionUpload,

));
}else{

$msg = "erreur durant l'importation de la photo";

}
}else{

$msg="votre photo de profile doit etre au format jpg, jpeg, gif ou png";


}

}else{
    $msg= "Votre photo de profile ne doit pas depasser 2Mo";
}
}

?>
<!DOCTYPE html>
<html lang="en">

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
          <a class="nav-link" href="profile.php?id=<?= $_SESSION['id']; ?>">Mon profile</a>
        </li>
                <li class="nav-item">
          <a class="nav-link" href="logoout.php">Déconnexion</a>
        </li>
        
      </ul>
     
    </div>
  </div>
</nav>
    <form action="" method="post" enctype="multipart/form-data">
  <label>Photo</label>
  <input type="file" name="avatar"  />
  <br><br>
  <button class="btn btn-primary" type="submit" name="signup">Mettre à jour ma photo</button>

</form>
</body>
</html>





