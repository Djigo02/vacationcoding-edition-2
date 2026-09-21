<?php

  // Ceci est un commentaire monoligne

  //Declaration d'une variable

  define("ECOLE", "ISI");
  define("TVA", 0.18);
  const PI = 3.14;

  $nom = "Fatou";
  $prenom = "Guisse";
  $age = 23;
  $moyenne = 15.75;
  $estEtudiant = true;
  $montantInscription = 270000;
  $valTVA = $montantInscription * TVA;
  $apayer = $montantInscription + $valTVA;

  /*
  *Ceci est un
  commentaire
  multiligne
  */
  
  echo "Ceci est du texte provenant du php";

  echo "La valeur de ecole est : ". ECOLE;

  echo "Le Nom est : $nom <br> ";
  echo 'Le prenom est : ' . $prenom . '<br>';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Ecole d'inscription : <?php echo ECOLE ?> </h1>
  <p>Bienvenue dans la page php</p>

  <?php
    echo "Ceci est un deuxieme texte provenant du php <br> <h3>Ceci est un paragraphe provenant du php</h3>";
  ?>

  <ul>
    <li>Nom : <?php echo $nom ?></li>
    <li>Prenom : <?php echo $prenom ?></li>
    <li>Age : <?php echo $age ?></li>
    <li>Moyenne : <?php echo $moyenne ?></li>
    <li>Montant a payer : <?php echo $apayer ?> FCFA</li>
  </ul>

</body>

</html>