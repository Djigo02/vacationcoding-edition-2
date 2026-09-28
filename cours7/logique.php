<?php 
/**
 * calculerCagnotte : reçoit le nombre de membres et la cotisation, retourne la cagnotte brute (nombre
  *de membres × cotisation).
 */

  function calculerCagnotte($nbMembre, $cotisation){
    return $nbMembre * $cotisation;
  }

  // $cagnotteBrute = calculerCagnotte(5, 5000);
  // echo $cagnotteBrute;

  /** 2. calculerMontantNet : reçoit la cagnotte brute et retourne le montant après retrait des 2 %. */

  function calculerMontantNet($cagnotteBrute){
    return $cagnotteBrute - $cagnotteBrute * 0.02;
  }

  /** 3. calculerToursRestants : reçoit le nombre de membres et le tour actuel, retourne le nombre de tours qui restent après le tour en cours.
 */

  function calculerToursRestants($nbMembre, $tour){
    return $nbMembre - $tour;
  }

  /** 4. estTontineTerminee : reçoit le nombre de membres et le tour actuel, retourne vrai si le tour actuel est supérieur au nombre de membres.
 */

  function estTontineTerminee($nbMembre, $tour){
    //! Methode 1
    // if($tour > $nbMembre){
    //   return true;
    // }else{
    //   return false;
    // }
    //! Methode 2
    return $tour > $nbMembre;
  }

  /** 5. obtenirStatutTour : reçoit un numéro de tour et le tour actuel. Retourne « Passé » si le numéro est
inférieur au tour actuel, « En cours » s’il est égal, « À venir » s’il est supérieur.
 */

function obtenirStatutTour($numTour, $tourActuel){
  if($numTour < $tourActuel){
    return "Passé";
  }elseif($numTour == $tourActuel){
    return "En cours";
  }else{
    return "À venir";
  }
}