<?php 
const TVA = 0.18;
$prix = 2500;
$quantite = 8;
$nomClient = "Modou";

 $mht = $prix * $quantite;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Introduction du html dans le php</title>
</head>

<body>
  <h1>FACTURE DE PAIEMENT</h1>
  <p>Nom : <strong><?php echo $nomClient ?></strong> </p>
  <p>Quantite : <?php echo $quantite ?></p>
  <p>Prix : <?php echo $prix . " FCFA" ?> </p>
  <p>Valeur TVA : <?php echo $mht * TVA ?> FCFA </p>
  <p>TOTAL A PAYER : <?php echo $mht + $mht * TVA ?> </p>
  <hr>
  <!--  -->
  <p>Nom : <strong><?= $nomClient ?></strong> </p>
  <p>Quantite : <?= $quantite ?></p>
  <p>Prix : <?= $prix . " FCFA" ?></p>
  <p>Valeur TVA : <?= $mht * TVA ?> FCFA </p>
  <p>TOTAL A PAYER : <?= $mht + $mht * TVA ?> </p>
</body>

</html>