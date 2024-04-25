<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST</title>
    <script src="script.js" defer></script>
</head>
<body>
    <?php

    $titre = "Bienvenue sur notre site";
    $texte = "Generation de code HTML.";

    echo "<h1>$titre</h1>";
    echo "<p>$texte</p>";
    ?>

    <h1 id="titre"><?php echo $titre; ?></h1>
</body>
</html>