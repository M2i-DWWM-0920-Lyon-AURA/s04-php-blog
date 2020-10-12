<?php include './utils/database.php'; ?>

<?php

$result = fetchFromDatabase('SELECT * FROM `articles` WHERE `id` = ' . $_GET['id']);

// Si la requête n'a renvoyé aucun élément, c'est donc que l'article n'existe pas
if (count($result) === 0) {
    throw new Error('Article #' . $_GET['id'] . ' does not exist.');
// Sinon
} else {
    $article = $result[0];
}

?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>

    <?php include './templates/article.tpl.php'; ?>
    
</main>

<?php include './templates/footer.tpl.php'; ?>