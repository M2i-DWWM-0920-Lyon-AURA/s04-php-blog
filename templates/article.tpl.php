<article>
    <div class="jumbotron">
        <h1><?= $article->getTitle() ?></h1><small>Published on <?= $article->getDate() ?></small><img
            src="<?= $article->getImage() ?>" class="img-fluid">
    </div>
    <div>

        <?= $article->getContent() ?>

    </div><a href="/"><button type="button" class="btn btn-secondary">Back to Home</button></a>
</article>
