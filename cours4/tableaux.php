<?php 
  $note = 15; // une seule valeur en meme temps pour une variable simple

  // VECTEURS

  $films = []; // tableau vide
  $tabFilm = ["The Amazing Spiderman", "Spiderman Brand New Day", "Spiderman Homecoming", "Spiderman No Way Home"];

  // echo $tabFilm;
  // var_dump($tabFilm);
  // Afficccher une valeur d'un tableau il faut passer par son indice

  echo "Film 1 : $tabFilm[0]";
  echo "<br>";
  echo "Film 2 : $tabFilm[1]";
  echo "<br>";
  echo "Film 3 : $tabFilm[2]";
  echo "<br>";

  echo "Total de films : " . count($tabFilm);

  echo "<br>";

  for ($i=0; $i < count($tabFilm) ; $i++) { 
    echo "Film " . $i+1 . " : $tabFilm[$i]";
    echo "<br>";
  }

  echo "<br>";

  // MATRICE 

  $classe = [
    ["Amadou", "Astou", "Seynabou", "Bintou", "Saliou", "Ahmadou"],
    ["Omar", "Assane", "Moustapha", "Souleymane"],
    [12,5.6,true, 'X']
  ];

  var_dump($classe);

  echo "<hr>";
  echo "Parccours de la matrice";
  echo "<br>";

  for ($i=0; $i < count($classe); $i++) { 
    var_dump($classe[$i]);
    echo "<br>";

    for($j = 0; $j < count($classe[$i]); $j++){
      var_dump($classe[$i][$j]);
      echo "<br>";
    }
    echo "<hr>";
  }

  // Tableau associatif

  $console = [
    "model" => "PS4",
    "nombreJeux" => 5,
    "annee" => 2013,
    "type" => "slim"
  ];
// $consoleJeu = ["PS4", 5,"slim",2013];
//   for ($i=0; $i < count($consoleJeu) ; $i++) { 
//     echo "$consoleJeu[$i]";
//     echo "<br>";

//   }


// foreach
  

  
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cours Tableaux PHP</title>
</head>

<body>

</body>

</html>