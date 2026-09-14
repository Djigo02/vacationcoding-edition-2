<?php  
// affichage simple
echo("Salut Les gars <strong>Bamba </strong>");
echo("<br>");

$nom = "Bamba" ;
$age = "34";
$estmature = true;

echo("Nom : $nom");
echo("<br>");
echo("Age : $age");
echo("<br>");
echo("Est Mature : $estmature");


// var_dump($nom);
// echo("<br>");
// var_dump($age);
// echo("<br>");

// // $age = 45;
// var_dump($age);
// declarer une constante
const TVA = 0.18;
// define("TAUX", 0.05);
echo("<br>");

// echo(TVA);


//condition
$prixHT = 50000;

$taxe = $prixHT * TVA;

$mttc = $prixHT + $taxe ;

$estEtudiant = true;

if($estEtudiant == true){
  $reduction = $mttc * 0.2;
  $mttc = $mttc - $reduction;
}

echo("Le montant a payer est $mttc");



?>