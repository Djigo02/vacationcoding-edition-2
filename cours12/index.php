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
  <div class="px-4 py-5 my-5 text-center"> <img class="d-block mx-auto mb-4" src="assets/logo.png" alt="" width="300">
    <h1 class="display-5 fw-bold text-body-emphasis">Bienvenue au <span class="text-success">five</span>book</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Le logiciel de gestion des reservations de vos terrains five.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center"> <button type="button"
          class="btn btn-primary btn-lg px-4 gap-3">Voir les terrains</button> <button type="button"
          class="btn btn-outline-secondary btn-lg px-4">Voir les reservations</button> </div>
    </div>
  </div>
</body>

</html>