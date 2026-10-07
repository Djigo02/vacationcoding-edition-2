<?php 
  require_once("model/db.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SG-ETUDIANT</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>

  <div class="card col-4 offset-4 my-5">
    <form action="connexion.php" method="post">
      <div class="card-header text-center">CONNEXION</div>
      <div class="card-body">
        <div class="form-group mb-3">
          <label class="form-label">Email</label>
          <input name="email" type="email" class="form-control">
        </div>
        <div class="form-group mb-3">
          <label class="form-label">Mot de passe</label>
          <input name="mdp" type="password" class="form-control">
        </div>
      </div>
      <div class="card-footer">
        <button type="reset" class="btn col-4 offset-1 btn-danger">Annuler</button>
        <button name="btnSubmit" type="submit" class=" col-4 offset-1 btn btn-primary">Se connecter</button>
      </div>
    </form>
  </div>

</body>

</html>