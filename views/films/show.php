<!-- views/films/show.php -->
<?php ob_start(); ?>
<h1><?= htmlspecialchars($film['titre']) ?></h1>
<p><?= htmlspecialchars($film['description']) ?></p>
<h3>Personnages</h3>
<div class="characters">
    <?php foreach ($characters as $character): ?>
        <div class="character-card">
            <h4><?= htmlspecialchars($character['nom']) ?></h4>
            <p><?= htmlspecialchars($character['description']) ?></p>
            <p><strong>Créateur :</strong> <?= htmlspecialchars($character['createur_personnage']) ?></p>
            <img src="<?= htmlspecialchars($character['image']) ?>" alt="<?= htmlspecialchars($character['nom']) ?>">
        </div>
    <?php endforeach; ?>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'layouts/main.php'; ?>