<?php 

// Configure la connexion à la base de données
$user = 'root';
$pass = 'root';
// dbh = Database Handler (gestionnaire de base de données)
$dbh = new PDO('mysql:host=localhost;dbname=php-blog', $user, $pass);

// Crée un objet qui va nous permettre d'envoyer une requête dans la base de données
// stmt = Statement (déclaration)
$stmt = $dbh->query('SELECT * FROM `articles` LIMIT 50');

// Exécute la requête dans la base de données et récupère le résultat,
// sous forme de tableaux associatifs
$articles = $stmt->fetchAll();

// Fonction permettant de retrouver un article en fonction de son Id
function findArticleById(int $id) {
    global $articles;
    // Pour chaque article du tableau "articles"
    foreach ($articles as $article) {
        // Si l'Id de l'article est le même que l'Id recherché
        if ($article['id'] === $id) {
            // Renvoie l'article
            return $article;
        }
    }
    // Affiche un message d'erreur
    throw new Error('Article #' . $id . ' could not be found.');
}

// Fonction permettant de filtrer les articles qui contiennent un mot-clé
function filterArticlesByKeyword(string $keyword): array {
    global $articles;
    // Initialise un tableau "résultat" vide
    $result = [];
    // Pour chaque article du tableau "articles"
    foreach ($articles as $article) {
        // Si l'article contient le mot-clé recherché
        if (strpos(strtolower($article['title']), strtolower($keyword)) !== false) {
            // Ajoute l'article au tableau "résultat"
            array_push($result, $article);
        }
    }
    // Renvoie le tableau "résultat"
    return $result;
}

function countArticlesByCategoryId(int $id): int {
    global $articles;
    $result = 0;
    foreach ($articles as $article) {
        if ($article['category'] === $id) {
            $result += 1;
        }
    }
    return $result;
}
