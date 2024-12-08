<!-- views/films/index.php -->
<?php ob_start(); ?>
<h1>Films de type <?= htmlspecialchars($type_horreur) ?></h1>
<div class="films">
    <?php foreach ($films as $film): ?>
        <div class="film-card">
            <h2><?= htmlspecialchars($film['titre']) ?></h2>
            <p><?= htmlspecialchars($film['description']) ?></p>
            <a href="/index.php?controller=FilmController&action=show&id=<?= $film['id'] ?>">Voir les détails</a>
        </div>
    <?php endforeach; ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layouts/main.php'; ?>