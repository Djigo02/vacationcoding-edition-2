<?php
  $stations = [
    "Préfecture de Guédiawaye",
    "Golf Sud", 
    "Parcelles Assainies", 
    "Grand Médine", 
    "Liberté 6",
    "Sacré-Cœur",
    "Grand Dakar",
    "Place de l'Obélisque",
    "Médina",
    "Gare de Petersen"
  ];

  $depart = "Parcelles Assainies";
  $arrivee = "Médina";
  $iDepart = -1;
  $iArrivee = -1;

  // var_dump($stations);

  for($indice = 0; $indice < count($stations); $indice++){
    // echo $indice . " - " . $stations[$indice];
    // echo "<br>";
    //! Recupere l'indice de la station de depart
    if($stations[$indice]==$depart){
      $iDepart = $indice;
    }

    //! Recupere l'indice de la station de d'arrivee
    if($stations[$indice]==$arrivee){
      $iArrivee = $indice;
    }

  }

  //!  Calculer le nombre d'arrêts entre les deux stations (la différence des positions, toujours positive).

  if($iDepart < $iArrivee){
    $nbArret = $iArrivee - $iDepart;
  }else{
    $nbArret = $iDepart - $iArrivee;
  }

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Correction exo tableau</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <h1 class="my-5 text-center">Bienvenue sur l'aide BRT</h1>
  <?php if($iDepart == -1){ ?>
  <div class="alert alert-danger col-4 offset-4 text-center my-2">
    Station <?= $depart ?> introuvable
  </div>
  <?php } ?>


  <?php if($iArrivee == -1){ ?>
  <div class="alert alert-danger col-4 offset-4 text-center my-2">
    Station <?= $arrivee ?> introuvable
  </div>
  <?php } ?>

  <!-- Question 3 : Si les deux stations sont identiques, afficher « Vous êtes déjà arrivé ». -->

  <?php if($iArrivee == $iDepart && $iDepart != -1){ ?>
  <div class="alert alert-success text-center col-4 offset-4 my-2">Vous etes deja arrivee !!!!</div>
  <?php } ?>


  <!-- Question 4 : Calculer le nombre d'arrêts entre les deux stations (la différence des positions, toujours
positive). -->
  <?php if($iDepart != -1 && $iArrivee != -1 && $iArrivee != $iDepart){ ?>
  <div class="alert alert-primary text-center col-4 offset-4 my-2">
    Le nombre d'arret entre les deux stations est de : <?= $nbArret - 1 ?>
  </div>
  <?php } ?>
  <!-- 5. Déterminer le sens : « Vers Gare de Petersen » ou « Vers Préfecture de Guédiawaye » -->
  <?php if($iDepart != -1 && $iArrivee != -1  && $iArrivee != $iDepart): ?>
  <div class="alert alert-warning text-center col-4 offset-4 my-2">
    Direction : <?= ($iDepart < $iArrivee )? "Vers Gare de Petersen" : "Vers Préfecture de Guédiawaye" ?>
  </div>
  <?php endif ?>
  <!-- Question 6 : Afficher toutes les stations traversées dans l'ordre du voyage : boucle croissante dans un
sens, boucle décroissante dans l'autre. -->
  <?php if($iDepart != -1 && $iArrivee != -1  && $iArrivee != $iDepart): ?>

  <?php if($iDepart > $iArrivee): ?>
  <!-- Vers Guediawaye -->
  <?php for($i = $iDepart; $i >= $iArrivee; $i--):?>
  <div class="alert alert-success text-center col-4 offset-4 my-2">
    <?= $stations[$i] ?>
  </div>
  <?php endfor?>

  <!-- Fin Vers Guediawaye -->

  <?php else: ?>
  <!-- Vers Petersen -->
  <?php for($i = $iDepart; $i <= $iArrivee; $i++):?>

  <?php if($i==$iDepart){ ?>
  <div class="alert alert-success text-center col-4 offset-4 my-2">
    <?= $stations[$i] ?>
  </div>
  <?php }else if($i==$iArrivee){ ?>
  <div class="alert alert-danger text-center col-4 offset-4 my-2">
    <?= $stations[$i] ?>
  </div>
  <?php } else{?>
  <div class="alert alert-secondary text-center col-4 offset-4 my-2">
    <?= $stations[$i] ?>
  </div>
  <?php } ?>


  <?php endfor?>
  <!--Fin Vers Petersen -->

  <?php endif ?>

  <?php endif ?>



</body>

</html>