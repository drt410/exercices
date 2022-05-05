<!-- Vérification du contenu d'un formulaire -->
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vérification du contenu d'un formulaire</title>
  <link rel="stylesheet" href="css/main.css">
</head>

<body id="top">
  <h1>Vérification du contenu d'un formulaire</h1>
  <p>Contenu de $_GET, $_POST et $_COOKIE</p>
  <p>
    <strong>Vous devez exécuter ce programme dans un serveur Web acceptant PHP pour voir une réponse !</strong>
  </p>

  <table>
  <tr>  
    <th>Nom</th>
    <th>Valeur</th>
  </tr>

  <?php
  /* print_r($_REQUEST); */
  foreach($_POST as $cle=>$valeur)
  {
    echo("<tr><td>".$cle."</td><td>".$valeur."</td></tr>");
  }
  ?>

  </table>

  <p>Retourner à la page d'<a href="index.html" title="Retourner au formulaire">accueil</a>
</p>
</body>

</html>