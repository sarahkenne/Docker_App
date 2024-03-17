<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $sujet = $_POST['demande'];

    // Connexion à la base de données
    $bd = new PDO(
        'mysql:host=localhost;dbname=astro;charset=utf8',
        'root',
        ''
    );

    // Préparation et exécution de la requête d'insertion
    $requete = 'INSERT INTO users (nom, prenom, email, sujet) VALUES (:nom, :prenom, :email, :sujet)';
    $prepare = $bd->prepare($requete);
    $prepare->execute([
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'sujet' => $sujet,
    ]);

    // Redirection vers success.php après l'insertion des données
    header("Location: success.php");
    exit(); // Arrêter le script après la redirection
} 
?>


