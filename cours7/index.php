<?php 
include_once("logique.php");
require_once("var.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LA TONTINE DE L'ESPIONNE</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <div class="card col-6 offset-3 my-4">
    <div class="card-header text-center h1 ">LA TONTINE DE MATY
    </div>
    <div class="card-body">
      <!-- <p>Nombre de membres <span class="badge text-bg-primary"><?= $nombreMembre ?></span></p>
      <p>Cotisation par membre <span class="badge text-bg-primary"><?= COTISATION ?> FCFA</span></p>
      <p>TOUR NUMERO <span class="badge text-bg-primary"><?= $tourActuel ?></span></p> -->
      <!--//? Afficher montant brute avec variable -->
      <!-- <p>Montant Brut <span class="badge text-bg-primary"><?= $montantBrute ?> FCFA</span></p> -->
      <!--//? Afficher montant brute avec la fonction -->
      <!-- <p>Montant Brut <span class="badge text-bg-warning"><?= calculerCagnotte($nombreMembre, COTISATION) ?> FCFA</span>
      </p>
      <p>TEGGI <span class="badge text-bg-info"><?= number_format(calculerMontantNet($montantBrute), 0, "", " ") ?>
          FCFA</span>
      </p> -->
      <?php if(estTontineTerminee($nombreMembre, $tourActuel)): ?>
      <p class="text-center fw-bold text-success">TONTINE TERMINER</p>
      <?php else: ?>
      <p class="text-center fw-bold text-warning">TONTINE EN COURS</p>
      <p>Montant Brut <span
          class="badge text-bg-primary"><?= number_format(calculerCagnotte($nombreMembre, COTISATION), 0, "", " ") ?>
          FCFA</span></p>
      <p>TEGGI <span class="badge text-bg-info"><?= number_format(calculerMontantNet($montantBrute), 0, "", " ") ?>
          FCFA</span>
      <p>TOUR RESTANT <span class="badge text-bg-danger"><?= calculerToursRestants($nombreMembre, $tourActuel)?>
        </span>

      <table class="table table-striped table-bordered">
        <thead>
          <th>#</th>
          <th>Beneficiaire</th>
          <th>Statut</th>
        </thead>
        <tbody>
          <?php for($i = 1; $i <= $nombreMembre; $i++): ?>
          <tr>
            <td><?= $i ?></td>
            <td>Membre numero <?= $i ?></td>
            <td>
              <?php if($tourActuel > $i): ?>
              <span class="badge text-bg-success"><?= obtenirStatutTour($i, $tourActuel) ?></span>
              <?php endif ?>
              <?php if($tourActuel == $i): ?>
              <span class="badge text-bg-warning"><?= obtenirStatutTour($i, $tourActuel) ?></span>
              <?php endif ?>
              <?php if($tourActuel < $i): ?>
              <span class="badge text-bg-danger"><?= obtenirStatutTour($i, $tourActuel) ?></span>
              <?php endif ?>
            </td>
          </tr>
          <?php endfor ?>
        </tbody>
      </table>

      <?php endif ?>

    </div>

  </div>
</body>

</html>