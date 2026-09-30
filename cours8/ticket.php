<?php
  $PLAT = $_POST['prixPlat'];
  $DESSERT = $_POST['prixDessert'];
  $BOISSON = $_POST['prixBoisson'];
  $nbplat = $_POST['nombrePlat'];
  $nbdessert = $_POST['nombreDessert'];
  $nbboisson = $_POST['nombreBoisson'];
?>

<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TP - Ticket SmartCantine</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <!-- TEMPLATE DE TICKET -->
  <div class="ticket-preview">
    <div class="ticket">
      <!-- Titre -->
      <div class="titre">SMARTCANTINE</div>

      <!-- Numéro du ticket -->
      <div class="numero-ticket">
        Ticket :
      </div>

      <!-- Articles commandés -->
      <div class="articles">
        <p>PLATS : <?= $nbplat * $PLAT ?> F</p>
        <p> BOISSONS : <?= $nbboisson * $BOISSON ?> F </p>
        <p>DESSERTS : <?= $nbdessert * $DESSERT ?> F</p>
      </div>

      <!-- Sous-total -->
      <div class="sous-total">
        <span>Sous-total</span>
        <span> <?= $nbplat * $PLAT + $nbboisson * $BOISSON + $nbdessert * $DESSERT ?> F</span>
      </div>

      <!-- Réductions appliquées -->
      <div class="reductions">
        <strong>Réductions appliquées :</strong>
        <p>Reduction Happy Hours : -</p>
        <p>Reduction Code chance : -</p>
        <p>Reduction combo : -</p>
      </div>

      <!-- Frais de service -->
      <div class="frais">
        <span>Frais de service (1%) :</span>
        <span>+ F</span>
      </div>

      <!-- Total à payer -->
      <div class="total">
        <span>TOTAL À PAYER</span>
        <span>[TOTAL_PAYER] F</span>
      </div>

      <!-- Merci -->
      <div class="merci">
        Merci de votre visite !<br>
      </div>
    </div>
  </div>

</html>