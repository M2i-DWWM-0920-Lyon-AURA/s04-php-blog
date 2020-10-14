<div class="jumbotron">
    <h1>Category: <?= $category->getName() ?></h1>
    <div>
        <?= $category->getDescription() ?>
    </div><a href="/category-list.php"><button type="button" class="btn btn-secondary">All Categories</button></a>
</div>

<h2>Articles listed under <?= $category->getName() ?></h2>

<ul style="padding-inline-start: 0px; display: grid; grid-template-columns: repeat(2, 1fr); gap: 1em;">

    <?php
        foreach ($articles as $article) {
            if ($article['category'] === $category['id']) {
                include './templates/article-preview.tpl.php';
            }
        }
    ?>

</ul>
