<?php
    //! Si un formaulaire est envoyer par la methode POST 
    //! La variable super global qui sera utiliser est $_POST 
    //? Si un formaulaire est envoyer par la methode GET 
    //? La variable super global qui sera utiliser est $_GET 


    // echo "NOM COMPLET : ". $_POST['nomComplet'];
    // echo "<br>";
    // echo "AGE : ". $_POST['age'];


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
  <h1 class="text-center">Ceci est la page qui recoint les infos du formulaire</h1>
  <?php if(isset($_POST['btnSubmit'])): ?>
  <ul class="list-group">
    <li class="list-group-item">NOM COMPLET : <?= $_POST['nomComplet'] ?></li>
    <li class="list-group-item">AGE : <?= $_POST['age'] ?></li>
  </ul>
  <?php else: ?>
  <div class="alert alert-danger text-center">Veuillez remplir le formulaire</div>
  <?php endif ?>

</body>

</html>