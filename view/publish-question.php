
<?php 


session_start();
if(!isset($_SESSION['auth'])){

header('Location: ../login.php');

}


?>
<?php require 'publishQuestionAction.php'; ?>

<!DOCTYPE html>
<html lang="en">
  
<?php require '../include/head.php'; ?>

<body>
<?php include '../include/navbar.php'; ?>


<br></br>
<form class= "container" method="POST">
<?php

if(isset($errormsg)){

echo '<p>' .$errormsg.'</p>';

}

else
if(isset($successmsg)){

    echo '<p>' .$successmsg.'</p>';

}

?>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Titre de la question</label>
    <input type="text " class="form-control" name="title" >
   
</div>
<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Description de la question</label>
    
    <textarea  class="form-control" name= "description"></textarea>
</div>

<div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Contenu de la question</label>
    <textarea class="form-control" name="content" ></textarea>
   
</div>

  
<button type="submit" class="btn btn-primary" name="signup">Publier la question</button>

</form>
</body>
</html>