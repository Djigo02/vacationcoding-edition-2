<?php 
  // Les tableau associatifs
  // $classes = ["Bamba","Anta", "Fanta"];
  // $notes = [15, 18, 9];

  // $classes = [
  //   "Bamba" => 15, 
  //   "Anta" => 19,
  //   "Fanta" => 9, 
  //   "Modi" => "Quatorze"
  // ];

  // // $tab = [
  // //   0 => 12,
  // //   1 => 15
  // // ];

  // var_dump($classes);

  // echo "<br>";
  // echo $classes['Bamba'];
  // echo "<br>";
  // echo $classes['Anta'];
  // echo "<hr>";
  // echo "<h1> Affichage avec foreach </h1>";
  // echo "<hr>";
  // // echo $classes[0];

  // // foreach => pour chaque

  // foreach($notes as $x){
  //   echo $x;
  //   echo "<br>";
  // }

  // echo "<hr>";
  // echo "<p>Parcours avec for</p>";

  // echo "<hr>";
  // for($i = 0; $i<count($notes); $i++){
  //   echo $notes[$i];
  //   echo "<br>";
  //   }
    
  //   echo "<hr>";
  //   echo "<p>Parcours avec foreach</p>";
  
  //   echo "<hr>";
  // foreach($notes as $i){
  //   echo $i;
  //   echo "<br>";
  // }
  //   echo "<hr>";
  //   echo "<p>Parcours avec foreach affichage de cle et valeur</p>";
  
  //   echo "<hr>";
  // foreach($notes as $cle => $valeur){
  //   echo $cle . " -- ". $valeur;
  //   echo "<br>";
  // }
  // // Parcours du tableau associatif

  // foreach($classes as $cle => $valeur){
  //   echo "$cle a obtenu la note de $valeur/20";
  //   echo "<br>";
  // }

  $urgences = [
    "Police Nationnal" => 17,
    "Sapeur Pompier" => 18,
    "SAMU" => 1515,
    "SOS MEDECIN" => 800005050,
    "Gendarmerie" => 800002020
  ];

  $tailleur = [
    "Bousso" => [
      "Epaule" => 100,
      "Cou" => 52,
      "Poitrine" => 89,
      "Bras" => 90
    ],
    "Ada" => [
      "Epaule" => 80,
      "Cou" => 67,
      "Poitrine" => 69,
      "Cuisse" => 50,
      "Long Pantalon" => 117
    ],
    "Barry" => [
      "Epaule" => 180,
      "Cou" => 97,
      "Poitrine" => 109,
      "Cuisse" => 110
    ],
  ] ;

  // var_dump($tailleur);
  // foreach($tailleur as $client => $mesures){
  //   // pour chaque element de tailleur $client represente le nom du client et $mesures represente les mesures du client
  //   echo( "Client ".$client);
  //   echo "<br>";
  //   // var_dump($mesures);

  //   foreach($mesures as $element => $valeur){
  //     echo "$element : $valeur";
  //     echo "<br>"; 
  //   }
  //   echo "<hr>";

  // }
  // die;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Annuaire</title>
  <link rel="stylesheet" href="../bootstrap/bootstrap.min.css">
</head>

<body>
  <h1 class="text-center my-3">Annuaire numero d'urgence</h1>
  <div class="container col-8 offset-2">
    <table class="table table-bordered table-striped">
      <thead>
        <th>Services</th>
        <th>Numero d'urgences</th>
      </thead>
      <tbody>
        <?php foreach($urgences as $service => $numero){ ?>
        <tr>
          <td><?= $service ?></td>
          <td><?= $numero ?></td>
        </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>

  <hr>
  <h2 class="text-center my-4">Atelier de couture</h2>

  <div class="container col-4 offset-4">
    <ol class="list-group">
      <?php foreach($tailleur as $client => $mesures): ?>
      <li class="list-group-item">Client <?= $client ?></li>
      <p class="my-1 fw-bold">Mesures</p>
      <ul>
        <?php foreach($mesures as $zone => $val): ?>
        <li> <?= $zone . " : ". $val ?></li>
        <?php endforeach ?>
      </ul>
      <?php endforeach ?>
    </ol>
  </div>

</body>

</html>