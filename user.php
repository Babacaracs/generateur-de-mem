<!DOCTYPE html>
<html>
<head>
	<title>user</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>


	<!---formulaire d'inscription -->
    <div class="test">
    <form method="POST">
    <input type="email" name="email" placeholder="Email">
    <input type="text" name="username" placeholder="Nom d'utilisateur">
    <input type="password" name="password" placeholder="Mot de pass">
    <input type="password" name="confpassword" placeholder="Confirmation mot de pass">
    <input type="submit" name="inscrire">
    </form>
    </div>




<?php
//ouverture d'une connexion a la base de donnees CONTACT

$objetPdo= new PDO('mysql:host=localhost;dbname=generator','root','');
 

 $reponse= $objetPdo->prepare('INSERT INTO user(email,username,password) VALUES (:email,:username,:password)');

 $reponse->bindParam('email',$_POST['email']);
 $reponse->bindParam('username',$_POST['username']);
 $reponse->bindParam('password',$_POST['password']);
 



 //$insertok=$reponse->execute();

  



 if (isset($_POST['inscrire']))
  {
    if ($_POST['password']==$_POST['confpassword']) {
      echo "valide";
    $insertok = $reponse->execute();
   echo 'inscription reussi';
    header ('location: affichage.php');
      }
      elseif ($_POST['password']!=$_POST['confpassword']) {
          echo "invalide password";

      }
  }
 
 ?>




</body>
</html>