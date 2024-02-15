<?php
    // Créer COOKIE
    $CookieName = "Ramirez";
    $CookieValue = "Fortnite Game Character";
    setCoookie($CookieName, $CookieValue, time() + (86400 * 30));

    if (!isset($_COOKIE[$CookieName]))
    {
      echo "Cookie is not available";

    } else {
      echo "Cookie Value" . $COOKIE[$CookieValue];
    }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1>Bonjour</h1>
    <?php
    class Personne {
      public $age;
      public $nom;
      public $prenom;

      public function AfficherInfos() {
        echo "Nom : $this->nom, Prénom : $this->prenom, Age : $this->age";

      }
    }

    $personne1 = new Personne();
    $personne1->age = "18";
    $personne1->nom = "TropFort";
    $personne1->prenom = "Kylian";

    $personne1->AfficherInfos();

    ?>

    








  </body>
</html>
