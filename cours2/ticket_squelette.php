<?php

    define("CODE", rand(1000,9999)); 
    const PLAT = 5000;
    const DESSERT = 2500;
    const BOISSON = 1000; 
    //! variables
    $nbplats = 5;
    $nbdessert = 7;
    $nbboisson = 5;

    $jour = "mardi";
    $heure = 18;

    //! calcul du sous total

    $soustotal = $nbplats * PLAT + $nbboisson * BOISSON + $nbdessert * DESSERT;

    //! calcul de la redution combo
    $combo = $nbplats > $nbboisson ? $nbboisson * 200 : $nbplats * 200;
    // avec la fonction min
    // $combo = min($nbboisson, $nbplats) * 200;

    //! reduction happy hours
    $happyhours = (($heure >=11 && $heure <=13) || ($heure >=18 && $heure <= 19)) ? $soustotal * 0.1 : 0;
    // if(($heure >=11 && $heure <=13) || ($heure >=18 && $heure <= 19)){
    //   $happyhours = $soustotal * 0.1;
    // }else{
    //   $happyhours = 0;
    // }

    // structure ternaire
    // c = 5 si a > b sinon c = 10
    /***
     * if(a > b){
     *  c = 5
     * }else {
     *  c = 10
     * }
     * 
     * c = a > b ? 5 : 10;
     * 
     *  EXCEL => SI(condition ; VALEUR SI VRAI; VALEUR SI FAUX)
     * 
     * $variable = condition ? VALEUR VRAI : VALEUR FAUX
     * 
     */

    // Les boucles 

    // for | while | do..while
    
    //! for($i=0)

    //! for($variable = valeur depart; condition d'arret ; pas d'avancement)

    

    
// 5433 / 10 = 543.3
// 543 / 10 = 54.3
// 54 / 10 = 5.4
// 5 / 10 = 0.5

//! Calcul somme des chiffres
    // 5+4+3+3
    $sommechiffre = 0;
    $div = CODE;
    while ($div > 0) {
      $chiffre = $div % 10;
      $div = (int) $div / 10; // 542.3
      // $div = number_format($div / 10, 0);
      $sommechiffre = $sommechiffre + $chiffre; // $sommechiffre += $chiffre
    }

  //! calcul reduction code
  $reduction_code = $sommechiffre % 3 == 0 ? $soustotal * 0.05 : 0;

  $fraisservice = $soustotal * 0.01;


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
        Ticket : <?= CODE ?>
      </div>

      <!-- Articles commandés -->
      <div class="articles">
        <p>PLATS : <?= $nbplats ?> -- total : <?= $nbplats * PLAT ?> F</p>
        <p> BOISSONS : <?= $nbboisson ?> -- total : <?= $nbboisson * BOISSON ?> F </p>
        <p>DESSERTS : <?= $nbdessert ?> -- total : <?= $nbdessert * DESSERT ?> F</p>
      </div>

      <!-- Sous-total -->
      <div class="sous-total">
        <span>Sous-total</span>
        <span><?= $soustotal ?> F</span>
      </div>

      <!-- Réductions appliquées -->
      <div class="reductions">
        <strong>Réductions appliquées :</strong>
        <p>Reduction Happy Hours : -<?= $happyhours ?></p>
        <p>Reduction Code chance : -<?= $reduction_code ?></p>
        <p>Reduction combo : -<?= $combo ?></p>
      </div>

      <!-- Frais de service -->
      <div class="frais">
        <span>Frais de service (1%) :</span>
        <span>+ <?= $fraisservice ?> F</span>
      </div>

      <!-- Total à payer -->
      <div class="total">
        <span>TOTAL À PAYER</span>
        <span>[TOTAL_PAYER] F</span>
      </div>

      <!-- Merci -->
      <div class="merci">
        Merci de votre visite !<br>

        <?= $soustotal > 50000 ? "<strong>Client Caviar</strong>" : "<strong>Client avare</strong>" ?>
        <!-- <?php 
          // if ($soustotal > 50000) {
          //   echo "<strong>Client Caviar</strong>";
          // }else if ($soustotal > 30000){
          //   echo "<strong>Client genereux</strong>";
          //   }else{
          //   echo "<strong>Client pauvre</strong>";

          // }
        ?> -->
      </div>
    </div>
  </div>

</html>