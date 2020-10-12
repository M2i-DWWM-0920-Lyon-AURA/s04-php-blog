<?php

function fetchFromDatabase(string $sqlQuery) {
    // Configure la connexion à la base de données
    $user = 'root';
    $pass = 'root';
    // dbh = Database Handler (gestionnaire de base de données)
    $dbh = new PDO('mysql:host=localhost;dbname=php-blog', $user, $pass);

    // Crée un objet qui va nous permettre d'envoyer une requête dans la base de données
    // stmt = Statement (déclaration)
    $stmt = $dbh->query($sqlQuery);

    // Exécute la requête dans la base de données et récupère le résultat,
    // sous forme de tableaux associatifs
    return $stmt->fetchAll();
}
