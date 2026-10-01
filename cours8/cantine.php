<?php
const PRIXPLAT = 5000;
const PRIXDESSERT = 7000;
const PRIXBOISSON = 4000;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>La gargotte de Bamba</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <?php if(isset($_GET['error'])):?>
  <div class="alert alert-danger text-center h3 container my-5">Veuillez remplir tous les champs du formulaire</div>
  <?php endif ?>

  <form id="form" action="ticket.php" method="post">
    <div class="my-5 card col-6 offset-3">
      <div class="card-header text-center h1">Addition Client</div>
      <div class="card-body">
        <!-- PRIX ET NOMBRE DE COMMANDE -->
        <div class="row">
          <div class="col-4 offset-1">
            <div class="form-group mb-3">
              <label class="form-label">PRIX PLAT (FCFA)</label>
              <input name="prixPlat" type="text" readonly value="<?= PRIXPLAT ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">PRIX BOISSON (FCFA)</label>
              <input name="prixBoisson" type="number" readonly value="<?= PRIXBOISSON ?>" class="form-control">
            </div>
            <div class="form-group mb-3">
              <label class="form-label">PRIX DESSERT (FCFA)</label>
              <input name="prixDessert" type="number" readonly value="<?= PRIXDESSERT ?>" class="form-control">
            </div>
          </div>
          <div class="col-4 offset-1">
            <div class="form-group mb-3">
              <label class="form-label">NOMBRE PLAT</label>
              <input name="nombrePlat" id="nbplat" type="number" class="form-control">
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
        <button id="btnSubmit" type="submit" name="btnSubmit"
          class="btn btn-outline-success col-4 offset-1">Enregistrer</button>
      </div>
    </div>
  </form>

  <script>
  const nbPlat = document.getElementById('nbplat');
  const btn = document.getElementById('btnSubmit');

  btn.addEventListener('click', (e) => {
    e.preventDefault();
    if (nbplat.value != "") {
      alert("C'est bon")
      document.getElementById('form').submit();

    } else {
      alert("Nekkal nitt")
    }
  })
  </script>
</body>

</html>