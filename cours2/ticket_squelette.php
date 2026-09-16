<?php
    define("NUMERO_FACTURE", rand(1000,9999)); 

    // const NUMERO_FACTURE = valeur
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
        Ticket : <?= NUMERO_FACTURE ?>
      </div>

      <!-- Articles commandés -->
      <div class="articles">
        [ARTICLES_LIGNES]
      </div>

      <!-- Sous-total -->
      <div class="sous-total">
        <span>Sous-total</span>
        <span>[SOUS_TOTAL] F</span>
      </div>

      <!-- Réductions appliquées -->
      <div class="reductions">
        <strong>Réductions appliquées :</strong>
        [REDUCTIONS_LIGNES]
      </div>

      <!-- Frais de service -->
      <div class="frais">
        <span>Frais de service (1%) :</span>
        <span>+[FRAIS_SERVICE] F</span>
      </div>

      <!-- Total à payer -->
      <div class="total">
        <span>TOTAL À PAYER</span>
        <span>[TOTAL_PAYER] F</span>
      </div>

      <!-- Merci -->
      <div class="merci">
        Merci de votre visite !<br>
        À bientôt sur SmartCantine
      </div>
    </div>
  </div>

</html>