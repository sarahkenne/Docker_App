<?php
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$sujet = $_POST['demande'];

$host = getenv('DB_HOST');
$dbname = getenv('DB_NAME');
$username = getenv('DB_USER');
$password = getenv('DB_PASSWORD');

$bd = new PDO(
  "mysql:host=$host;dbname=$dbname;charset=utf8",
  $username,
  $password
);
$requete = 'INSERT INTO users (nom,prenom,email,sujet) VALUES (:nom, :prenom, :email, :sujet)';
$prepare = $bd->prepare($requete);
$prepare->execute([
  'nom' => $nom,
  'prenom' => $prenom,
  'email' => $email,
  'sujet' => $sujet,

]);
