<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$sujet = $_POST['demande'];

$bd = new PDO(
  'mysql:host=localhost; dbname=astro; charset=utf8',
  'root',
  ''
);
$requete = 'INSERT INTO users (nom,prenom,email,sujet) VALUES (:nom, :prenom, :email, :sujet)';
$prepare = $bd->prepare($requete);
$prepare->execute([
  'nom' => $nom,
  'prenom' => $prenom,
  'email' => $email,
  'sujet' => $sujet,

]);
