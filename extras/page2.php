<?php
  $cinema = "Le cinema d'ORION";
  $film = "Spiderman Brand New Day";
  $pegi = 12;
  $ageClient = 19;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Les conditions en php</title>
</head>

<body>
  <h1><?= $cinema ?></h1>
  <p>Le film a l'affiche : <strong><?= "$film" ?></strong></p>
  <p>PEGI - <?= $pegi ?></p>
  <?php
  // if($ageClient >= $pegi ){
  //   echo "Vous etes le bienvenu";
  // }else{
  //   echo "Vous etes pas le bienvenu";
  // }

  // structure ternaire (condition) ? INSTRUCTION SI VRAI : INSTRUCTION SI FAUX;
  echo ($ageClient >= $pegi) ?  "<p style='color: green'>Vous etes le bienvenu</p>" :  "<p  style='color: red'>Vous etes pas autorise a regarder cette sceance</p>";


?>

</body>

</html>