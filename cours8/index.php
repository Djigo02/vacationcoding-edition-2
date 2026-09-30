<?php
    //! Si un formaulaire est envoyer par la methode POST 
    //! La variable super global qui sera utiliser est $_POST 
    //? Si un formaulaire est envoyer par la methode GET 
    //? La variable super global qui sera utiliser est $_GET 


    // echo "NOM COMPLET : ". $_POST['nomComplet'];
    // echo "<br>";
    // echo "AGE : ". $_POST['age'];

    // if(isset($_POST['btnSubmit'])){
    //   echo "NOM COMPLET : ". $_POST['nomComplet'];
    // echo "<br>";
    // echo "AGE : ". $_POST['age'];
    // }


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <div class="h1 text-center my-4">Les formulaires</div>
  <div class="container col-6 offset-3 my-3">
    <form action="info.php" method="post">
      <div class="mb-3 form-group">
        <label class="form-label">Nom Complet</label>
        <input name="nomComplet" type="text" class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label class="form-label">Age</label>
        <input name="age" type="number" class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label class="form-label">email</label>
        <input name="email" type="email" class="form-control">
      </div>
      <div class="mb-3 form-group">
        <label class="form-label">Mot de passe</label>
        <input name="mdp" type="password" class="form-control">
      </div>
      <div class="mb-3 form-group">
        <button name="btnSubmit" class="btn btn-success col-4 offset-4">Soumettre</button>
      </div>
    </form>
  </div>
</body>

</html>