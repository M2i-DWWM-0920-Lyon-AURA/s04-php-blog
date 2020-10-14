<?php include './utils/database.php' ?>
<?php include './class/Category.php' ?>

<?php

// Récupère la catégorie correspondant à l'ID demandé
$result = fetchFromDatabase('
SELECT *
    FROM `categories`
    WHERE `id` = ' . $_GET['id']
);

// Si le résultat de la requête est un tableau vide, c'est donc qu'il n'existe pas de catégorie
// avec l'ID demandé
if (empty($result)) {
    throw new Error('Category #' . $_GET['id'] . ' does not exist.');
// Sinon
} else {
    $categoryData = $result[0];

    $category = new Category(
        $categoryData['id'],
        $categoryData['name'],
        $categoryData['description']
    );
}

?>

<?php include './templates/head.tpl.php'; ?>

<?php include './templates/header.tpl.php'; ?>

<main>
    <?php include './templates/category.tpl.php' ?>
</main>

<?php include './templates/footer.tpl.php'; ?>