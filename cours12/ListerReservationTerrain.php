<?php 
  require_once("model/connexion.php");
  require_once("model/functionTerrains.php");

  $idTerrain = $_GET['idTerrain'] ?? null;

  $listeReservation= listerReservationTerrainId($idTerrain);

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FIVEBOOK</title>
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
    <div class="container-fluid"> <button class="navbar-toggler" type="button" data-bs-toggle="collapse"> <span
          class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11"> <a class="navbar-brand col-lg-3 me-0"
          href="#"><img src="assets/logo.png" alt="" width="100"></a>
        <ul class="navbar-nav col-lg-6 justify-content-lg-center">
          <li class="nav-item"> <a class="nav-link active" aria-current="page" href="listeTerrain.php">Terrains</a>
          </li>
          <li class="nav-item"> <a class="nav-link" href="#">Reservations</a> </li>

        </ul>
      </div>
    </div>
  </nav>
  <h1>Liste de reservations</h1>
  <div class="container d-flex justify-content-around">
    <?php if(count($listeReservation) <= 0):  ?>
    <div class="alert alert-success text-center fw-bold">Il n'y a pas encore de reservation disponible</div>
    <?php else: ?>
    <table class="table table-bordered">
      <tr>
        <td>Date</td>
        <td>Heure debut</td>
        <td>Duree</td>
        <td>Montant a payer</td>
      </tr>


      <?php foreach($listeReservation as $reservation):
      ?>
      <tr>
        <td><?= $reservation['date_match'] ?></td>
        <td><?= $reservation['heure_debut'] ?></td>
        <td><?= $reservation['duree'] ?></td>
        <td><?= $reservation['duree'] ?></td>
        <!-- <td><?= $reservation['duree'] * $reservation['prix_heure'] ?></td> -->
      </tr>

      <?php 
    endforeach; ?>
    </table>
    <?php endif ?>


  </div>
</body>

</html>