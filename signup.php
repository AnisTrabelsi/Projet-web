


<?php 

require 'view/signupAction.php';

?> 

<!DOCTYPE html>
<html lang="en">
<?php 
 include 'include/head.php'; ?>
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
