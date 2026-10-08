<?php

  require_once("connexion.php");

  function listerTerrains(){
    global $connexion;

    $req = "SELECT * FROM terrains";
    $state = $connexion->prepare($req);
    $state->execute();
    return $state->fetchAll(PDO::FETCH_ASSOC);
  }

  function listerReservationTerrainId($idTerrain){
    global $connexion;

    $req = "SELECT * FROM reservations where id_terrain = ?";
    $state = $connexion->prepare($req);
    $state->execute([$idTerrain]);
    return $state->fetchAll(PDO::FETCH_ASSOC);
  }

  function addTerrain($nom, $quartier, $prix_heure, $photo){
    global $connexion;
    $req = "INSERT INTO terrains (nom, quartier, prix_heure, photo) VALUES (?, ?, ?, ?)";
    $state = $connexion->prepare($req);
    return $state->execute([$nom,$quartier,$prix_heure,$photo]);
  }