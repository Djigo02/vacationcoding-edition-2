<?php 
  require_once("model/connexion.php");
  require_once("model/functionTerrains.php");
  $listeTerrains = listerTerrains();

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
  <div class="container d-flex justify-content-around">

    <?php if(count($listeTerrains) <= 0):  ?>
    <div class="alert alert-success text-center fw-bold">Il n'y a pas encore de terrains disponible</div>
    <?php else:
      foreach($listeTerrains as $terrain):
      ?>

    <div class="card" style="width: 18rem;">
      <img src="<?= $terrain['photo'] ?>" class="card-img-top" alt="<?= $terrain['nom'] ?>">
      <div class="card-body">
        <h5 class="card-title"><?= $terrain['nom'] ?></h5>
        <p class="card-text"><?= $terrain['quartier'] ?></p>
        <a href="ListerReservationTerrain.php?idTerrain=<?= $terrain['id_terrain'] ?>"
          class="btn btn-sm btn-primary m-1">Voir les reservations</a>
        <a href="#" class="btn btn-sm btn-warning m-1">Modifier</a>
        <a href="#" class="btn btn-sm btn-danger m-1">Supprimer</a>
      </div>
    </div>

    <?php 
    endforeach;
    endif ?>

  </div>
</body>

</html>