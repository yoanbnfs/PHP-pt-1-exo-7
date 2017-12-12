<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>exo-7</title>
  </head>
  <body>
    <?php
      $nom = 'delatour';
      $prenom = 'Jean-Eude';
      $age = 92;
      settype($age, 'integer');
      echo  "Bonjour " . $nom . ' ' . $prenom . ' , tu as ' . $age . ' ans.';
    ?>
  </body>
</html>
