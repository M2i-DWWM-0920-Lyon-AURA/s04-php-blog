<?php include './utils/database.php'; ?>

<?php include './class/Article.php' ?>

<?php
// Interroge la base de données pour renvoyer tous les articles correspondant à l'ID demandé
$result = fetchFromDatabase('SELECT * FROM `articles` WHERE `id` = ' . $_GET['id']);

// Si la requête n'a renvoyé aucun élément, c'est donc que l'article n'existe pas
if (count($result) === 0) {
    throw new Error('Article #' . $_GET['id'] . ' does not exist.');
// Sinon
} else {
    // Extrait les données brutes de l'unique article trouvé
    $articleData = $result[0];

    // Crée un nouvel objet de type Article à partir de ces données
    $article = new Article(
        $articleData['id'],
        $articleData['title'],
        $articleData['summary'],
        $articleData['content'],
        $articleData['image'],
        $articleData['date']
    );
}

?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>

    <?php include './templates/article.tpl.php'; ?>
    
</main>

<?php include './templates/footer.tpl.php'; ?>