<!-- views/characters/show.php -->
<?php ob_start(); ?>
<h1><?= htmlspecialchars($character['nom']) ?></h1>
<p><?= htmlspecialchars($character['description']) ?></p>
<p><strong>Créateur :</strong> <?= htmlspecialchars($character['createur_personnage']) ?></p>
<img src="<?= htmlspecialchars($character['image']) ?>" alt="<?= htmlspecialchars($character['nom']) ?>">
<?php $content = ob_get_clean(); ?>
<?php include 'layouts/main.php'; ?>