<?php

const DBHOST = '127.0.0.1'; // 'localhost'
const DBNAME = 'cours';
const DBUSER = 'root';
const DBPASSWORD = '';

try{
  $connexion = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME.";charset=utf8mb4",DBUSER, DBPASSWORD);
  $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die("Une erreur c'est produite lors de la connexion a la base de donnée ". $e->getMessage());
}