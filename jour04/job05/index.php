<?php
$_POST['username'] = 0;
$_POST['password'] = 0;
$a = "John";
$b = "Rambo";


if ($a == $_POST['username'] && $b == $_POST['password'])
  {
    echo "C'est pas ma guerre";
  } 
   else
  {
      echo "Votre pire cauchemar";
  };


/*
if ($_POST['username'] == $a && $_POST['password'] == $b)
  {
    echo "C'est pas ma guerre";
  } 
   else
  {
      echo "Votre pire cauchemar";
  }
*/
?>








<form method="post" enctype="multipart/form-data">
<label for="uname"><b>Compte</b></label>
              <input name="username" type="text" placeholder="Entrer nom de compte" name="uname" required>
              
              <label name="password" for="password"><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrer mot de passe" name="mot de passe" required>
          
              <button type="submit">Login</button>

</form>
            