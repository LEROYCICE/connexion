<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
  <head>
    <title>Formulaire d'identification</title>

    <style>
      #connexion{
        margin-right: 35%;
        margin-left: 5%;
        font-family: 'Century Gothic',verdana sans serif;
        font-weight: bold ;
      }


    </style>
  </head>
  <body>
    
    <form action="main.php" method="post">
      <fieldset id="connexion">
          <p>
             <label for="username">NOM D'UTILISATEUR :</label> 
            <input type="text" name="username" id="username"  />
          </p>
          <p>
            <label for="mot_de_passe">MOT DE PASSE :</label> 
            <input type="password" name="mot_de_passe" id="mot_de_passe" value="" /> <br><br>
            <input type="submit" value="Se connecter" />
          </p>
      </fieldset>
    </form>

    <?php
  /*****************************************
  *  Constantes et variables
  *****************************************
  
  value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['username'], ENT_QUOTES); } ?>" /

 

  $user = $_POST['username'] ;
  $pass = $_POST['mot_de_passe'] ;


  define('LOGIN','$user');  // Login correct
  define('PASSWORD','$pass');  // Mot de passe correct
  $message = '';      // Message à afficher à l'utilisateur


  
 
  /*****************************************
  *  Vérification du formulaire
  *****************************************/
  // Si le tableau $_POST existe alors le formulaire a été envoyé
  if(!empty($_POST))
  {
    // Le login est-il rempli ?
    if(empty($_POST['username']))
    {
      $message = 'Veuillez indiquer votre login svp !';
    }
      // Le mot de passe est-il rempli ?
      elseif(empty($_POST['mot_de_passe']))
    {
      $message = 'Veuillez indiquer votre mot de passe svp !';
    }

  


      // Le login est-il correct ?
      elseif($_POST['username'] !== LOGIN)
    {
      $message = 'Votre login est faux !';
    }
      // Le mot de passe est-il correct ?
      elseif($_POST['mot_de_passe'] !== PASSWORD)
    {
      $message = 'Votre mot de passe est faux !';
    }

    
      else
    {
      // L'identification a réussi
      $message = 'Bienvenue '. LOGIN .' !';
    }
  }
?>

<?php if(!empty($message)) : ?>
      <p><?php echo $message; ?></p>
    <?php endif; ?>




  </body>
</html>
