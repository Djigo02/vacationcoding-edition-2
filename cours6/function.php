<?php

// $montant = 25000;
// $montant2 = 27300;
// $montant3 = 3400;

// const TVA = 0.18;

// // echo "Le montant TTC est du client est de : ". $montant + $montant*TVA;
// // echo "<br>";
// // echo "Le montant TTC est du client est de : ". $montant2 + $montant2*TVA;
// // echo "<br>";
// // echo "Le montant TTC est du client est de : ". $montant3 + $montant3*TVA;
// // echo "<br>";

// function bienvenue(){
//   echo"Bonjour et bienvenue dans le jeu";
//   echo "<br>";
// }

// function saluer($username){
//   echo "Salut $username";
//   echo "<br>";
// }




// function afficherTTC($montant){
//   echo "Le montant TTC est du client est de : ". $montant + $montant*TVA;
//   echo "<br>";
// }


// afficherTTC($montant);
// afficherTTC($montant2);
// afficherTTC($montant3);

// bienvenue();
// bienvenue();
// bienvenue();
// bienvenue();
// bienvenue();
// bienvenue();
// bienvenue();


// $user1 = "Astar";
// $user2 = "DIYA";
// $user3 = "PATHE";

// saluer($user1);
// saluer($user2);
// saluer($user3);

// // ! Function avec retour

// function calculerTTC($montant){
//   return $montant + $montant * TVA;
// }

// echo "Le montant TTC est de : ". calculerTTC(40000) . "FCFA";
// echo "<br>";

// $mttc = calculerTTC($montant);

// echo "Le montant TTC est de : ". $mttc . "FCFA";
// echo "<br>";

$tab = [4000, 7500, 20000, 12000, 100000, 1000000];

const EURO = 655;
const DOLLAR = 595;
const POUND = 780;

function toEuros($xof){
  return $xof / EURO;
}

function toDollars($xof){
  return $xof / DOLLAR;
}
function toPounds($xof){
  return $xof / POUND;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculateur de devise</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>

  <h1 class="text-center my-3">Calculez la devise</h1>
  <div class="container col-6 offset-3">
    <table class="table table-striped">
      <thead>
        <th>Montant</th>
        <th>Devise en EUROS</th>
        <th>Devise en LIVRES</th>
        <th>Devise en DOLLARS</th>
      </thead>
      <tbody>
        <?php foreach($tab as $montant): ?>
        <tr>
          <td><?= number_format($montant, 0,".", " " ) ?> FCFA</td>
          <td><?= number_format(toEuros($montant), 2,".", " " ) ?> € </td>
          <td><?= toDollars($montant) ?> $</td>
          <td><?= toPounds($montant) ?> £</td>
        </tr>
        <?php endforeach ?>

      </tbody>
    </table>
  </div>


</body>

</html>