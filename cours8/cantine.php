<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La gargotte de Bamba</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <form action="ticket.php" method="post">
    <div class="my-5 card col-6 offset-3">
      <div class="card-header text-center h1">Addition Client</div>
      <div class="card-body">
        <!-- PRIX ET NOMBRE DE COMMANDE -->
        <div class="row">
          <div class="col-4 offset-1">
            <div class="form-group mb-3">
              <label class="form-label">PRIX PLAT</label>
              <input name="prixPlat" type="number" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">PRIX BOISSON</label>
              <input name="prixBoisson" type="number" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">PRIX DESSERT</label>
              <input name="prixDessert" type="number" class="form-control">
            </div>
          </div>
          <div class="col-4 offset-1">
            <div class="form-group mb-3">
              <label class="form-label">NOMBRE PLAT</label>
              <input name="nombrePlat" type="number" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">NOMBRE BOISSON</label>
              <input name="nombreBoisson" type="number" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">NOMBRE DESSERT</label>
              <input name="nombreDessert" type="number" class="form-control">
            </div>
          </div>
        </div>
        <!-- REDUCTION -->
        <div class="form-group row offset-1 form-switch">
          <div class="col-3">
            <input type="checkbox" class="form-check-input" name="happyHours">
            <label class="form-check-label">Happy Hours</label>
          </div>
          <div class="col-3 offset-1">
            <input type="checkbox" class="form-check-input" name="combo">
            <label class="form-check-label">Combo</label>
          </div>
          <div class="col-3 offset-1">
            <input type="checkbox" class="form-check-input" name="chance">
            <label class="form-check-label">Chance</label>
          </div>
        </div>

      </div>
      <div class="card-footer">
        <button type="reset" class="btn btn-outline-danger col-4 offset-1">Annuler</button>
        <button type="submit" name="btnSubmit" class="btn btn-outline-success col-4 offset-1">Enregistrer</button>
      </div>
    </div>
  </form>
</body>

</html>